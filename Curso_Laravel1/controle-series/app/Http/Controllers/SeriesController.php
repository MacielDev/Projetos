<?php

namespace App\Http\Controllers;

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
}
