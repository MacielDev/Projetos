<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Controller\ControllerComHtml;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;


class FormularioInsercao extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function processaRequisicao():void
    {
        echo $this->renderizaHtml('cursos/formulario.php',[
        'titulo'=> 'Novo Curso'
        ]);
    }
}
