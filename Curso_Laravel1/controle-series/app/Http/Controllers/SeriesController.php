<?php

namespace App\Http\Controllers;

class SeriesController extends Controller
{
    function listarSeries(){
        $series =[
            'Grey\'s Anatomy',
            'O atirador',
            'Cobra Kai'
        ];
       return view('series.index',compact('series'));
   }
   public function create()
   {
       return view('series.create');
   }
}
