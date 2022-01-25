<?php

use Alura\Cursos\Controller\Exclusao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\FormularioInsercao;


return [
    '/listar-cursos'=> ListarCursos::class,
    '/novo-curso'=> FormularioInsercao::class,
    '/salvar-curso'=> Persistencia::class,
    '/excluir-curso'=> Exclusao::class
];

