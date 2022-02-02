<?php

require __DIR__ . '/../vendor/autoload.php';


use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
use Psr\Http\Server\RequestHandlerInterface;

//temos o caminho 
$caminho  = $_SERVER['PATH_INFO'];

//temos as rotas
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

//$ehRotaDeLogin = stripos($caminho,'login');
 ////informando ao php que iremos utilizar a sessão
 //session_start(); 
 //if(!isset($_SESSION['logado']) && $ehRotaDeLogin === false){
 //   header('Location:/login');exit(); 
// }

//Montando uma fabrica de requisições
 $psr17Factory = new Psr17Factory();
 $creator = new ServerRequestCreator(
     $psr17Factory, // ServerRequestFactory
     $psr17Factory, // UrlFactory
     $psr17Factory, // UploadedFileFactory
     $psr17Factory // StreamFactory
 );
 //Utilizando as SuperGlobais (Get, Post, Server...) para gerara request
 $request = $creator->fromGlobals();

$classeControladora = $rotas[$caminho];

//Chamando nosso container

/**@var \Psr\Container\ContainerInterface $container */
$container = require __DIR__ . '/../config/dependencies.php';
/**
 * @var RequestHandlerInterface $controlador
 */
$controlador = $container->get($classeControladora);
//Fazendo a injeção de dependência em nosso método processaRequisição($request) , 
$resposta = $controlador->handle($request);

//Pegando todos os cabeçalhos retornados
foreach($resposta->getHeaders() as $name=>$values){
   //Percorrendo o valor de cada cabeçalho
   foreach($values as $value){
      header(sprintf('%s: %s', $name, $value),false);
   }
}
//Devolvendo o corpo de cada requisição
echo $resposta->getBody();



