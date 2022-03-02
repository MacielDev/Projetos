<?php

namespace App\Http\Controllers;

use App\Models\Episodio;
use App\Models\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(Temporada $temporada, Request $request)
    {
        $episodios = $temporada -> episodios;
        $temporadaId = $temporada -> id;

        return view('episodios.index',compact('episodios','temporadaId'));
    }
    public function assistir(Temporada $temporada, Request $request)
    {
        $idEpisodiosAssistidos = array_keys($request->episodios);
        $episodiosAssistidos = $request->episodios;
        $temporada->episodios->each(function(Episodio $episodio) use($idEpisodiosAssistidos){
            $episodio->assistido = in_array($episodio->id,$idEpisodiosAssistidos);
        });
        $temporada->push();
        return redirect()->back();
    }
}
