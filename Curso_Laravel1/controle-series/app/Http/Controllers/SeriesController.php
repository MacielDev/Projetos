<?php

namespace App\Http\Controllers;


use App\Models\Serie;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;


class SeriesController extends Controller
{
    function index(Request $request)
    {
        $series = Serie::all();
        $mensagem = $request->session()->get('mensagem');
        return view('series.index', compact('series', 'mensagem'));
    }
    public function create()
    {
        return view('series.create');
    }
    public function store(SeriesFormRequest $request)
    {
        $serie = Serie::create(['nome' => $request->nome]);
        $qtdTemporadas = $request->qtd_temporadas;
        for ($i = 1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            for ($j = 1; $j <= $request->ep_por_temporada; $j++) {
                $temporada->episodios()->create(['numero' => $j]);
            }
        }
        $request->session()
            ->flash(
                'mensagem',
                "Série com id {$serie->id} e suas temporadas e episódios foram criados com sucesso {$serie->nome}"
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
