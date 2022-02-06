<?php

namespace App\Http\Controllers;
use App\Serie;
use Illuminate\Http\Request as HttpRequest;

class SeriesController extends Controller
{
    function listarSeries(){
        $nomePagina = "Séries";
        $series =[
            'Grey\'s Anatomy',
            'O atirador',
            'Cobra Kai'
        ];
       return view('series.index',compact('series','nomePagina'));
   }
   public function create()
   {
       $nomePagina = 'Adicionar Séries';
       return view('series.create',compact('nomePagina'));
   }
   public function store(HttpRequest $request)
   {
       $nome = $request->get('nome');
       $serie = new Serie();
       $serie->nome=$nome;
       var_dump($serie->save());
   }
}
