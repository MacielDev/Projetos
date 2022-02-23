<?php
namespace App\Services;

use App\Models\Serie;

class CriadorDeSeries
{
    public function criarSerie(String $nome, int $qtdTemporadas,int $epPorTemporada):Serie
    {
        $serie = Serie::create(['nome' => $nome]);
        $qtdTemporadas = $qtdTemporadas ;
        for ($i = 1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            for ($j = 1; $j <= $epPorTemporada ; $j++) {
                $temporada->episodios()->create(['numero' => $j]);
            }
        }
        return $serie;
    }
}


