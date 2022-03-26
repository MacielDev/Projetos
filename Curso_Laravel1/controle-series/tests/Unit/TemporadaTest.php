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
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        /************** Cenario de teste ******************/

        // Cria uma temporada por
        $temporada = new Temporada();

        // Cria Episodios
        $episodio1 = new Episodio();
        $episodio2 = new Episodio();
        $episodio3 = new Episodio();

        // Atribuindo o status de assistidos ou nao assistidos
        $episodio1->assistido = true;
        $episodio2->assistido = false;
        $episodio3->assistido =true;

        //Atribuindo os episodios a temporada
        $temporada->episodios->add($episodio1);
        $temporada->episodios->add($episodio2);
        $temporada->episodios->add($episodio3);

        /********************* Testes ********************/
        //Execussao
        $episodiosAssistidos = $temporada->getEpisodiosAssistidos();

        //Verificacoes
        $this->assertCount(2,$episodiosAssistidos);
    }

}
