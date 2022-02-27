@extends('layout')

@section('cabecalho')
    Episódios
@endsection

@section('conteudo')
    <ul class="list-group theme-dark">
        @foreach ($episodios as $episodio)
            <li class="list-group-item d-flex align-items-center justify-content-between">
                Episódio {{ $episodio->numero }}
                <input type="checkbox">
            </li>
        @endforeach
    </ul>
@endsection
