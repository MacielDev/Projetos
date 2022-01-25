<?php

require_once __DIR__ . '/vendor/autoload.php';
use Alura\Cursos\Infra\EntityManagerCreator;
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(
    (new EntitymanagerCreator())->getEntityManager()
);
