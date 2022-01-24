<?php
namespace Alura\Cursos\Controller;



use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;

class Persistencia implements InterfaceControladorRequisicao{

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
        //pegar dados do formulário 

        //$dadosDoFormulario = $_POST//['nameDoCampoDoFormulario']
        
        //montar modelos cursos 
        $curso = new Curso();
        $curso->setDescricao($_POST['descricao']);
        
        // Inserir no banco 
        $this->entityManager->persist($curso);
        $this->entityManager->flush();
    }
}