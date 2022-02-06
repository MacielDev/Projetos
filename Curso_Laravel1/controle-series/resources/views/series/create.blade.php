@extends('layout')

@section('cabecalho')
    Adicionar Séries
@endsection
       
        @section('conteudo')
        <form method="post" action="/series/criar">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <button class="btn btn-primary btn-lg mb-1">Adicionar</button>
        </form>
        @endsection
