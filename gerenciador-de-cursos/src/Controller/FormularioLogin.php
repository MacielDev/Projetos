<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;

class FormularioLogin implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;
    public function processaRequisicao():void
    {
      echo $this->renderizaHtml('login/formulario.php',[
          'titulo'=>'login'
      ]);  
    }
}