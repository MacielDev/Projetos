<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;

class RealizarLogin implements InterfaceControladorRequisicao
{
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioUsuarios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioUsuarios = $entityManager->getRepository(Usuario::class);
    }
    public function processaRequisicao(): void
{
    $email = filter_input(INPUT_POST,
        'email',
        FILTER_VALIDATE_EMAIL
    );

    if (is_null($email) || $email === false) {
        echo "O e-mail digitado não é um e-mail válido";
        exit();
    }

    $senha = filter_input(INPUT_POST,
        'senha',
        FILTER_SANITIZE_STRING);

    /** @var  $usuario */
    $usuario = $this->repositorioUsuarios
        ->findOneBy(['email' => $email]);

    if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)) {
        echo "E-mail ou senha inválidos";
        return;
    }

    //Passadno que o usuário está logado
    $_SESSION['logado']=true;


    header('Location: /listar-cursos');
}
}
