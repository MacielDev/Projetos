@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
        @if(!empty($mensagem))
        <div class="alert alert-success p-md-4" role="alert">{{$mensagem}}</div>
        @endif
        <a href="/series/criar" class="btn btn-dark btn-lg mb-1">Adicionar</a>
        
        <ul class="list-group">
            @foreach ($series as $serie)
            <li class="list-group-item  d-flex justify-content-between">{{ $serie->nome }}
                <span class="">
                    <a href="#" class="btn btn-info">Editar</a>
                    <a href="#" class="btn btn-danger">Excluir</a>
                </span>
            </li>
            @endforeach
        </ul>
@endsection

