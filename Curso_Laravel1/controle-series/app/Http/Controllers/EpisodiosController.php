<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use App\Models\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(int $temporadaId)
    {
        $temporada = Temporada::find($temporadaId);
        $episodios = $temporada -> episodios;
        $temporadaId = $temporada -> id;

        return view('episodios.index',compact('episodios','temporadaId'));
    }
    public function assistir(Temporada $temporada, Request $request)
    {
        $episodiosAssistidos = $request->episodios;
        $temporada->episodios->each(function(Episodio $episodio) use($episodiosAssistidos){
            $episodio->assistido->in_array($episodio->id,$episodiosAssistidos);
        });
        $temporada->push();
    }
}
