<?php

require __DIR__ . '/../vendor/autoload.php';

use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;

//temos o caminho 
$caminho  = $_SERVER['PATH_INFO'];

//temos as rotas
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}
 //informando ao php que iremos utilizar a sessão
session_start(); 
 
$ehRotaDeLogin = stripos($caminho,'login');

 if(!isset($_SESSION['logado']) && $ehRotaDeLogin === false){
    header('Location:/login');exit(); 
 }


// Antes de Buscar o contrlador - precisamos criar os dados da requisição ($request)

$psr17Factory = new Psr17Factory();
$creator = new ServerRequestCreator(
    $psr17Factory, //ServerRequestFactory
    $psr17Factory, //UriFactory
    $psr17Factory, //UploadFileFactory
    $psr17Factory, //StreamFactory
);
$serverRequest = $creator->fromGlobals();

$classeControladora = $rotas[$caminho];

/**@var ContainerInterface $container */
$container = require __DIR__ . '/../config/dependencies.php';

/**@var RequestHandlerInterface $controlador */
$controlador = $container->get($classeControladora);

$resposta = $controlador->handle($serverRequest);

foreach($resposta->getHeaders() as $name =>$values){
    foreach($values as $value){
        header(sprintf('%s:%s',$name,$value),false);
    }
}
echo $resposta->getBody();






