@extends('layout')

@section('cabecalho')
    Temporadas da série {{ $serie->nome }}
@endsection

@section('conteudo')
    <ul class="list-group theme-dark">
        @foreach ($temporadas as $temporada)
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <a href="/series/{{ $temporada->id }}/episodios">
                    Temporada{{ $temporada->numero }}
                </a>
                <span class="badge badge-secondary">
                    0 / {{ $temporada->episodios->count() }}
                </span>

            </li>
        @endforeach
    </ul>
@endsection
