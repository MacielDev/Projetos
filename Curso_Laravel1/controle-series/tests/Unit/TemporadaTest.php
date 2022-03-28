<?php

namespace Tests\Unit;

use App\Models\Episodio;
use App\Models\Temporada;
/*
Ao criarmos o nosso teste utilizando o conmando php artisan make:test --unit , O Laravel nos devolve a classe de testes com o seguinte    =======>   use PHPUnit\Framework\TestCase;

Porem eu estava recebendo o seguinte erro: Fatal error: Uncaught Error: Call to a member function connection() on null in E:\projects\try\vendor\laravel\framework\src\Illuminate\Database\Eloquent\Model.php:1013

A solucao encontrada foi , utilizar     =====>    use Tests\TestCase

*/
use Tests\TestCase;

class TemporadaTest extends TestCase
{

    /************** Cenario de teste utilizando o método setUp ******************/
    /** @var Temporada */
    private $temporada;

    public function setUp(): void
    {
        parent::setUp();
        // Cria uma temporada por
        $temporada = new Temporada();
        // Cria Episodios
        $episodio1 = new Episodio();
        $episodio2 = new Episodio();
        $episodio3 = new Episodio();

        // Atribuindo o status de assistidos ou nao assistidos
        $episodio1->assistido = true;
        $episodio2->assistido = false;
        $episodio3->assistido = true;

        //Atribuindo os episodios a temporada
        $temporada->episodios->add($episodio1);
        $temporada->episodios->add($episodio2);
        $temporada->episodios->add($episodio3);

        $this->temporada = $temporada;
    }

    /*
       Teste 1 - Verifica o número de episódios assistidos
               - Verifica a se o valor do atributo assistido é (true)
     */
    public function testBuscaPorEpisodiosAssistidos()
    {
        /********************* Testes ********************/
        //Execussão
        $episodiosAssistidos = $this->temporada->getEpisodiosAssistidos();

        //Verificações
        $this->assertCount(2, $episodiosAssistidos);
        foreach ($episodiosAssistidos as $episodio) {
            $this->assertTrue($episodio->assistido);
        }
    }

    /*
        Teste 2 - Verificando se a temporada possui de fato a quantidade de episódios adicionados  (Nesse caso tres episódios)
    */
    public function testBuscaTodosEpisodios()
    {
        $episodios = $this->temporada->episodios;
        $this->assertCount(3,$episodios);
    }

}
