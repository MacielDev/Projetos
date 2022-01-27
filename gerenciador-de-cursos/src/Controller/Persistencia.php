<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMessageTrait;
use Alura\Cursos\Infra\EntityManagerCreator;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;

class Persistencia implements InterfaceControladorRequisicao
{
    use FlashMessageTrait;
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

        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        $tipo = 'success';
        if (!is_null($id) && $id !== false) {
            $curso->setId($id);
            $this->entityManager->merge($curso);
            $this->defineMensagem(
                $tipo,
                'Curso atualizado com sucesso');
            
        } else {
            // Inserir no banco 
            $this->entityManager->persist($curso);
            $this->defineMensagem($tipo,'Curso criado com sucesso');
        }
        
        
        $this->entityManager->flush();
        //UTILIZANDO UM CABEÇALHO PHP PARA REDIRECIONAR O BROWSER PARA OUTRA PÁGINA
        header('Location:/listar-cursos', true, 302);
    }
}
