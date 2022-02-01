<?php

namespace Alura\Cursos\Controller;


use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormularioInsercao implements RequestHandlerInterface
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
   public function handle(ServerRequestInterface $request):ResponseInterface
   { 
       $html = 'Teste';
       return new Response(200,[],$html);
   }
}