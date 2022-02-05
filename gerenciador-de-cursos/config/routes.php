<?php

use Alura\Cursos\Controller\{
    Exclusao,
    ListarCursos,
    Persistencia,
    FormularioInsercao,
    FormularioEdicao,
    FormularioLogin, 
    RealizarLogin,
    Deslogar,
    CursosEmJason,
    CursosEmXml};

return [
    '/listar-cursos'=> ListarCursos::class,
    '/novo-curso'=> FormularioInsercao::class,
    '/salvar-curso'=> Persistencia::class,
    '/excluir-curso'=> Exclusao::class,
    '/alterar-curso'=> FormularioEdicao::class,
    '/login'=> FormularioLogin::class,
    '/realiza-login'=>RealizarLogin::class,
    '/logout'=>Deslogar::class,
    '/buscarCursosEmJson' =>CursosEmJason::class,
    '/buscarCursosEmXml'=>CursosEmXml::class
];