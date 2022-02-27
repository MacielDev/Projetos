<?php

namespace App\Services;

use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Support\Facades\DB;

class CriadorDeSeries
{
    public function criarSerie(
        String $nomeSerie,
        int $qtdTemporadas,
        int $epPorTemporada
    ): Serie {
        $serie = null;
        DB::transaction(function () use ($nomeSerie, $qtdTemporadas, $epPorTemporada, &$serie) {
            $serie = Serie::create(['nome' => $nomeSerie]);
            $this->criaTemporadas($qtdTemporadas,$epPorTemporada,$serie);
        });
        return $serie;
    }

    private function criaTemporadas(int $qtdTemporadas, int $epPorTemporada,Serie $serie): void
    {
        for ($i = 1; $i < $qtdTemporadas+1; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            $this->criaEpisodios($epPorTemporada,$temporada);
        }
    }

    private function criaEpisodios(int $epPorTemporada,\Illuminate\Database\Eloquent\Model $temporada): void
    {
        for ($j = 1; $j <= $epPorTemporada+1; $j++) {
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
}
