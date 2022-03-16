@extends('layout')

@section('cabecalho')
    Temporadas da série {{ $serie->nome }}
@endsection

@section('conteudo')
    <ul class="list-group theme-dark">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <a href="/temporadas/{{ $temporada->id }}/episodios">
                    Temporada{{ $temporada->numero }}
                </a>
                <span class="badge badge-secondary">
                    {{ $temporada->getEpisodiosAssistidos()->count() }} / {{ $temporada->episodios->count() }}
                </span>

            </li>
        @endforeach
    </ul>
@endsection
