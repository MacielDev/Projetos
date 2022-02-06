<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request as HttpRequest;

class SeriesController extends Controller
{
    function listarSeries()
    {
        $series = Serie::all();
        return view('series.index', compact('series'));
    }
    public function create()
    {
        return view('series.create');
    }
    public function store(HttpRequest $request)
    {
        $nome = $request->get('nome');
        Serie::create($request->all());
    }
}
