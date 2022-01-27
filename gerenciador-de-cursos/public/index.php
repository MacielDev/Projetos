<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\InterfaceControladorRequisicao;

//temos o caminho 
$caminho  = $_SERVER['PATH_INFO'];

//temos as rotas
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

$ehRotaDeLogin = stripos($caminho,'login');
 //informando ao php que iremos utilizar a sessão
 session_start(); 
 if(!isset($_SESSION['logado']) && $ehRotaDeLogin === false){
    header('Location:/login');exit(); 
 }

$classeControladora = $rotas[$caminho];

/**
 * @var InterfaceControladorRequisicao $controlador
 */
$controlador = new $classeControladora();
$controlador->processaRequisicao();





