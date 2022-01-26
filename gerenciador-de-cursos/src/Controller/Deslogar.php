<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Controller\InterfaceControladorRequisicao;

class Deslogar implements InterfaceControladorRequisicao
{
    public function processaRequisicao():void
    {
        session_destroy();
        header('Location:/login');
    }
}