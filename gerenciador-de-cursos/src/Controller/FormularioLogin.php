<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Controller\ControllerComHtml;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;

class FormularioLogin extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function processaRequisicao():void
    {
      echo $this->renderizaHtml('login/formulario.php',[
          'titulo'=>'login'
      ]);  
    }
}