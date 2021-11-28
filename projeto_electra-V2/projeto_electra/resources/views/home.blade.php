@extends('layouts.app')

@section('title','Painel de Administração')

@section('content')

<div class="container home_container main_top">
    <div class="container-fluid">
        <div class="row">

            @foreach($categorias as $categoria)
            <div class="col mt-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <a href="{{route('apresentarCursos')}}" class="link_areas">
                        <img src="images/formacoes/front-end.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$categoria->nome}}</h5>
                            <p class="card-text">{{$categoria->descricao}}</p>
                            <div class="container-fluid align-content-between">
                                <button class="btn btn-info">Informações</button>
                                <button class="btn btn-danger">Deletar</button>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
