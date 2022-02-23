<?php

namespace App\Http\Controllers;


use App\Models\Serie;
use App\Models\Episodio;
use App\Models\Temporada;
use Illuminate\Http\Request;
use App\Services\CriadorDeSeries;
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
                "Série com id {$serie->id} e suas temporadas e episódios foram criados com sucesso {$serie->nome}"
            );
        return redirect()->route('listar_series');
    }
    public function destroy(Request $request)
    {
        $serie = Serie::find($request->id);
        $nome = $serie->nome;

        /**Código para deletar 1º)episódios/ 2º)temporadas/ 3º)serie */
       $serie->temporadas->each(function(Temporada $temporada){
            $temporada->episodios->each(function(Episodio $episodio){
                $episodio->delete();
            });
            $temporada->delete();
       });
       $serie->delete();

        $request->session()
            ->flash(
                'mensagem',
                "Série {$nome} excluida com sucesso"
            );
        return redirect()->route('listar_series');
    }
}
