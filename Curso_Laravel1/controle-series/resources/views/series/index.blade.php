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
            <a href="#" class="btn btn-info btn-sm">Editar</a>
            <form method="post" action="/series/remover/{{$serie->id}}">
                @csrf
                @method('DELETE')
                <button href="#" class="btn btn-danger btn-sm">Excluir</button>
            </form>
        </span>
    </li>
    @endforeach
</ul>
@endsection