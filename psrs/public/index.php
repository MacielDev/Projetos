<?php

require __DIR__ . '/../vendor/autoload.php';


use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
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

 $psr17Factory = new Psr17Factory();
 $creator = new ServerRequestCreator(
     $psr17Factory, // ServerRequestFactory
     $psr17Factory, // UrlFactory
     $psr17Factory, // UploadedFileFactory
     $psr17Factory // StreamFactory
 );
 
 $serverRequest = $creator->fromGlobals();

$classeControladora = $rotas[$caminho];
/**
 * @var InterfaceControladorRequisicao $controlador
 */
$controlador = new $classeControladora();

$resposta = $controlador->processaRequisicao($request);

foreach($respostas->getHeaders() as $name=>$values){
   foreach($values as $value){
      header(sprintf('%s: %s', $name, $value),false);
   }
}

echo $resposta->getBody();



