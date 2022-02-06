@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
        <a href="/series/criar" class="btn btn-dark btn-lg mb-1">Adicionar</a>

        <ul class="list-group">
            @foreach ($series as $serie)
            <li class="list-group-item">{{$serie}}
                <span>
                    <a href="#" class="btn btn-info">Editar</a>
                    <a href="#" class="btn btn-danger">Excluir</a>
                </span>
            </li>
            @endforeach
        </ul>
@endsection

