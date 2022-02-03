<?php

namespace Alura\Cursos\Controller;

use Nyholm\Psr7\Response;
use Alura\Cursos\Entity\Curso;
use Psr\Http\Message\ResponseInterface;
use Doctrine\ORM\EntityManagerInterface;
use Alura\Cursos\Helper\FlashMessageTrait;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;


class Persistencia implements RequestHandlerInterface
{
    use FlashMessageTrait;
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        //pegar dados do formulário e aplicando um filtro

        $descricao = filter_var(
            $request->getParsedBody()['descricao'],
            FILTER_SANITIZE_STRING
        );
        //montar modelos cursos 
        $curso = new Curso();
        $curso->setDescricao($descricao);

        $id = filter_var(
            $request->getQueryParams()['id'],
            FILTER_VALIDATE_INT
        );

        $tipo = 'success';
        if (!is_null($id) && $id !== false) {
            $curso->setId($id);
            $this->entityManager->merge($curso);
            $this->defineMensagem(
                $tipo,
                'Curso atualizado com sucesso');
            
        } else {
            // Inserir no banco 
            $this->entityManager->persist($curso);
            $this->defineMensagem($tipo,'Curso criado com sucesso');
        }
        
        
        $this->entityManager->flush();
        //UTILIZANDO UM CABEÇALHO PHP PARA REDIRECIONAR O BROWSER PARA OUTRA PÁGINA
        return new Response(302,['Location'=>'/listar-cursos']);
    }
}
