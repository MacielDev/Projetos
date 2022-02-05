<?php

namespace Alura\Cursos\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class CursosEmJason implements RequestHandlerInterface
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeCursos = $entityManager
        ->getRepository(Cursos::class);
    }
    public function handle(ServerRequestInterface $request):ResponseInterface
    {
     
        $cursos = $this->repositorioDeCursos->findAll();
        return new Response(
            200,[],json_encode($cursos)
        );
    }
}