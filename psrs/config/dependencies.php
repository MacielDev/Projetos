<?php

use DI\ContainerBuilder;
use Doctrine\ORM\EntityManagerInterface;
use Alura\Cursos\Infra\EntityManagerCreator;

//Criando o nosso container de dependencias
$containnerBuilder = new ContainerBuilder();

//Passando para o conatiner quais dependencias gostariamos de ser capazes de criar

$containerBuilder->addDefinitions([
    EntityManagerInterface::class => function(){
        return (new EntityManagerCreator())->getEntityManager();
    }
]);

return $containerBuilder->build();
