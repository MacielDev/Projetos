<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;

class Persistencia implements InterfaceControladorRequisicao
{

    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;
    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        //pegar dados do formulário e aplicando um filtro

        $descricao = filter_input(
            INPUT_POST,
            'descricao',
            FILTER_SANITIZE_STRING
        );

        //montar modelos cursos 
        $curso = new Curso();
        $curso->setDescricao($descricao);

        // Inserir no banco 
        $this->entityManager->persist($curso);
        $this->entityManager->flush();

        //UTILIZANDO UM CABEÇALHO PHP PARA REDIRECIONAR O BROWSER PARA OUTRA PÁGINA
        echo "Curso $descricao salvo com sucesso";
        header('Location:/listar-cursos', true, 302);
    }
}
