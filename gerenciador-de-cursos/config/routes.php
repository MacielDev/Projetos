<?php

use Alura\Cursos\Controller\{
    Exclusao,
    ListarCursos,
    Persistencia,
    FormularioInsercao,
    FormularioEdicao,
    FormularioLogin};

return [
    '/listar-cursos'=> ListarCursos::class,
    '/novo-curso'=> FormularioInsercao::class,
    '/salvar-curso'=> Persistencia::class,
    '/excluir-curso'=> Exclusao::class,
    '/alterar-curso'=> FormularioEdicao::class,
    '/login'=> FormularioLogin::class
];

