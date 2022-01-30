<?php

namespace Alura\Cursos\Controller;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Nyholm\Psr7\Response;

class FormularioInsercao implements InterfaceControladorRequisicao
{
   public function processaRequisicao(ServerRequestInterface $request):ResponseInterface
   { 
       $html = 'Teste';
       return new Response(200,[],$html);
   }
}