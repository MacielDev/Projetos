<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;


class SeriesController extends Controller
{
    function index(Request $request)
    {
        $series = Serie::all();
        $mensagem = $request->session()->get('mensagem'); 
        return view('series.index', compact('series','mensagem'));
    }
    public function create()
    {
        return view('series.create');
    }
    public function store(SeriesFormRequest $request)
    {
        
        $serie = Serie::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Série com id {$serie->id} criada {$serie->nome}"
            );
        return redirect()->route('listar_series');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        Serie::destroy($id);
        $request->session()
        ->flash(
            'mensagem',
            "Série excluida com sucesso"
        );
        return redirect()->route('listar_series');
    }
}
