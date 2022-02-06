@extends('layout')

@section('cabecalho')
    Adicionar Séries
@endsection
       
        @section('conteudo')
        <form action="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <button href="#" class="btn btn-primary btn-lg mb-1">Adicionar</button>
        </form>
        @endsection
