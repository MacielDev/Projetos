<?php

namespace Alura\Cursos\Controller;

use Nyholm\Psr7\Response;
use Alura\Cursos\Entity\Curso;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;

class ListarCursos implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;
    private $repositorioDeCursos;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }
    public function handle(ServerRequestInterface $request):ResponseInterface
    {
        $html =$this->renderizaHtml('cursos/listar-cursos.php',[
            'cursos'=>$this->repositorioDeCursos->findAll(),
            'titulo'=>'Lista de Cursos'
        ]); ;
        
        return new Response(200,[],$html);
        
    }
}
