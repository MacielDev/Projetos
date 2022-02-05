<?php

namespace Alura\Cursos\Controller;

use Nyholm\Psr7\Response;
use Alura\Cursos\Entity\Curso;

use Psr\Http\Message\ResponseInterface;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class CursosEmXml  implements RequestHandlerInterface
{
    private $repositorioDeCursos;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeCursos=$entityManager->getRepository(Curso::class);
    }

    public function handle(ServerRequestInterface $request):ResponseInterface
    {
        /**
         * @var Curso[] $cursos
         */
        $cursos = $this->repositorioDeCursos->findAll();
        $cursosEmXml = new \SimpleXMLElement('<cursos/>');

        foreach ($cursos as $curso) {
            $cursoEmXml = $cursosEmXml->addChild('curso');
            $cursoEmXml->addChild('id',$curso->getId());
            $cursoEmXml->addChild('descricao',$curso->getDescricao());
        }
        return new Response(200,['Content-type'=>'application/xml'],$cursosEmXml->asXML());
    }
}
    