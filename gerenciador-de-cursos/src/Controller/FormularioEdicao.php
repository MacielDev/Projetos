<?php

namespace Alura\Cursos\Controller;

use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Alura\Cursos\Helper\FlashMessageTrait;
use Alura\Cursos\Entity\Curso;
use Psr\Http\Message\ResponseInterface;
use Doctrine\ORM\EntityManagerInterface;

use Psr\Http\Message\ServerRequestInterface;




class FormularioEdicao implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait, FlashMessageTrait;
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioCursos;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioCursos = $entityManager->getRepository(Curso::class);
    }
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $id = filter_var(
            $request->getQueryParams()['id'],
            FILTER_VALIDATE_INT
        );
        $resposta = new Response(302,['Location'=>'/listar-cursos']);

        if (is_null($id) || $id === false) {
            $this->defineMensagem(
                'danger',
                'Id de curso inválido');
            return $resposta;
        }

        $curso = $this->repositorioCursos->find($id);
        $html = $this->renderizaHtml('cursos/formulario.php',[
            'curso' => $curso,
            'titulo' => 'Alterar curso' .$curso->getDescricao()
        ]);
        return new Response(200, [], $html);
    }
}
