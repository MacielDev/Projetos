<?php
namespace App\Services;

use App\Models\Serie;
use Illuminate\Support\Facades\DB;

class CriadorDeSeries
{
    public function criarSerie(String $nomeSerie, int $qtdTemporadas,int $epPorTemporada):Serie
    {

        $serie = null;
        DB::transaction(function() use($nomeSerie,$qtdTemporadas,$epPorTemporada){
            $serie = Serie::create(['nome' => $nomeSerie]);
            $qtdTemporadas = $qtdTemporadas ;
            for ($i = 1; $i <= $qtdTemporadas; $i++) {
                $temporada = $serie->temporadas()->create(['numero' => $i]);
                for ($j = 1; $j <= $epPorTemporada ; $j++) {
                    $temporada->episodios()->create(['numero' => $j]);
                }
            }
        });
        return $serie;
    }
}


