@extends('layouts.categoria')

@section('title','Formulário Para Nova Categoria')

@section('content-cursos')

<form action="{{route('criarCategoria')}}" method="POST">
    @csrf
    <div class="conteudo-position container-lg">
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="nome">NOME</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o nome da categoria">
            </div>
            <div class="form-group col-md-4">
                <label for="imagem">IMAGEM</label>
                <input type="text" class="form-control-file" name="imagem" id="imagem" placeholder="Informe o nome da categoria">
            </div>
            <div class="form-group col-md-12">
                <label for="descricao">DESCRIÇÃO</label>
                <textarea type="text" class="form-control" name="descricao" id="descricao" placeholder="Fale mais sobre a nova categoria"></textarea>
            </div>

            <div class="btn btn-block form-group col-md-12">
                <button class="btn btn-group-lg btn-primary btn-block">CRIAR</button>
            </div>
        </div>
    </div>

</form>
@endsection
