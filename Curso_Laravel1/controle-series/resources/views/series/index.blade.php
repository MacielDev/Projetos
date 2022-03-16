@extends('layout')

@section('cabecalho')
    Séries
@endsection

@section('conteudo')
    @include('mensagem')
    <a href="{{ route('form_criar_serie') }}" class="btn btn-dark btn-lg mb-1">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item  d-flex justify-content-between align-items-center">
                <span id="nome-serie-{{ $serie->id }}">{{ $serie->nome }}</span>
                <div class="input-group w-50" hidden id="input-nome-serie-{{ $serie->id }}">
                    <input type="text" class="form-control" value="{{ $serie->nome }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" onclick="editarSerie({{ $serie->id }})">
                            <i class="bi bi-check-lg"></i>
                        </button>
                        @csrf
                    </div>
                </div>

                <span class="d-flex flex-row">
                    <a href="/series/{{ $serie->id }}/temporadas" class="mr-1 btn btn-info btn-sm"><i
                            class="bi bi-box-arrow-in-up-right"></i></a>

                    <button onclick="toggleInput({{ $serie->id }})" class="btn btn-success btn-sm"><i
                            class="bi bi-pencil"></i></button>

                    <form method="post" action="/series/remover/{{ $serie->id }}">
                        @csrf
                        @method('DELETE')
                        <button href="#" class="ml-1 btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
@endsection
