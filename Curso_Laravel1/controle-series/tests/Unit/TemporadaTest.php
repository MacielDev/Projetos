<?php

namespace Tests\Unit;

use App\Models\Episodio;
use App\Models\Temporada;
use PHPUnit\Framework\TestCase;

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
