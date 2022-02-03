<?php

namespace Alura\Cursos\Controller;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;

class FormularioLogin implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;
    public function handle(ServerRequestInterface $request):ResponseInterface
    {
      $html =$this->renderizaHtml('login/formulario.php',[
        'titulo'=>'login'
    ]);  
      return new Response(200,[],$html);
    }
}