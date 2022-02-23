@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success p-md-4" role="alert">{{$mensagem}}</div>
@endif
<a href="{{route('form_criar_serie')}}" class="btn btn-dark btn-lg mb-1">Adicionar</a>

<ul class="list-group">
    @foreach ($series as $serie)
    <li class="list-group-item  d-flex justify-content-between align-items-center">{{ $serie->nome }}
        <span class="d-flex flex-row">
            <a href="/series/{{ $serie->id }}/temporadas" class="mr-1 btn btn-info btn-sm"><i class="bi bi-box-arrow-in-up-right"></i></a>

            <a href="#" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>

            <form method="post" action="/series/remover/{{$serie->id}}">
                @csrf
                @method('DELETE')
                <button href="#" class="ml-1 btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            </form>
        </span>
    </li>
    @endforeach
</ul>
@endsection
