<?php

namespace App\Http\Controllers;


use App\Models\Serie;
use App\Models\Episodio;
use App\Models\Temporada;
use Illuminate\Http\Request;
use App\Services\CriadorDeSeries;
use App\Services\RemovedorDeSeries;
// use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function store(SeriesFormRequest $request, CriadorDeSeries $criadorDeSeries)
    {
        $serie = $criadorDeSeries->criarSerie(
            $request->nome,
            $request->qtd_temporadas,
            $request->ep_por_temporada
        );
        $request->session()
            ->flash(
                'mensagem',
                "Série com id {$serie->nome} e suas temporadas e episódios foram criados com sucesso"
            );
        return redirect()->route('listar_series');
    }

    public function editaNome(int $serieId, Request $request)
    {
        $novoNome = $request->nome;
        $serie=Serie::find($serieId);
        $serie->nome = $novoNome;
        $serie->save();
    }

    public function destroy(Request $request, RemovedorDeSeries $removedorDeSeries)
    {
        $nomeSerie = $removedorDeSeries->removerSerie($request->id);

        $request->session()
            ->flash(
                'mensagem',
                "Série  {$nomeSerie}  excluida com sucesso"
            );
        return redirect()->route('listar_series');
    }
}
