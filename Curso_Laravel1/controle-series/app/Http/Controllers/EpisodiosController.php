<?php

namespace App\Http\Controllers;

use App\Models\Temporada;
use Illuminate\Http\Request;

class EpisodiosController extends Controller
{
    public function index(int $temporadaId)
    {
        $episodios=Temporada::find($temporadaId)->episodios;

        return view('episodios.index',compact('episodios'));
    }
}
