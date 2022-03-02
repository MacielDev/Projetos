@extends('layout')

@section('cabecalho')
    Episódios
@endsection

@section('conteudo')
    <form action="/temporadas/{{ $temporadaId }}/episodios/assistir" method="post">
        @csrf
        <ul class="list-group theme-dark">
            @foreach ($episodios as $episodio)
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    Episódio {{ $episodio->numero }}
                    <input type="checkbox" name="episodios[{{ $episodio->id }}][assistido]" {{ $episodio->assistido ? 'checked' : '' }}>
                </li>
            @endforeach
        </ul>
        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
    </form>
@endsection
