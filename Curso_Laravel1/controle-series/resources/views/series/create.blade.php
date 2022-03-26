@extends('layout')

@section('cabecalho')
    Adicionar Séries
@endsection

@section('conteudo')
    @include('errors',['errors'=>$errors])
    <form method="post" action="/series/criar">
        @csrf
        <div class="row">
            <div class="col col-8">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="col col-2">
                <label for="qtd_temporadas">Nº temporadas</label>
                <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas" min="0">
            </div>
            <div class="col col-2">
                <label for="ep_por_temporada">Ep. por temporada</label>
                <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada" min="1">
            </div>
        </div>
        <button class="btn btn-primary btn-lg mb-1 mt-2">Adicionar</button>
    </form>
@endsection
