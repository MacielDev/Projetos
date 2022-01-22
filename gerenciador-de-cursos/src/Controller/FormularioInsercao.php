<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Controller\InterfaceControladorRequisicao;


class FormularioInsercao implements InterfaceControladorRequisicao
{
    public function processaRequisicao():void
    {
        $titulo = 'Novo Curso';
        require __DIR__ .'/../../view/cursos/formulario.php';
    }
}
