@extends('layouts.categoria')

@section('title','Criar Novo Curso')

@section('content-cursos')

<div class="container conteudo-position">

    <form action="{{route('create')}}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nome_curso">NOME</label>
                <input type="text" class="form-control" name="nome_curso" id="nome_curso" placeholder="Informe o nome do curso">
            </div>
            <div class="form-group col-md-12">
                <label for="descricao_curso">DESCRIÇÃO</label>
                <textarea type="text" class="form-control" name="descricao_curso" id="descricao_curso" placeholder="Fale mais sobre o novo curso"></textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="carga_horaria">CARGA HORÁRIA</label>
                <input type="text" class="form-control" name="carga_horaria" id="carga_horaria" placeholder="00 horas">
            </div>
            <div class="form-group col-md-4">
                <label for="preco">PREÇO</label>
                <input type="text" class="form-control" name="preco" id="preco" placeholder="R$00,00">
            </div>
            <div class="form-group col-md-4">
                <label for="periodo">PERÍODO</label>
                <select name="periodo" id="periodo" class="form-control">
                    <option selected>Escolha o perído</option>
                    <option>Manhã</option>
                    <option>Tarde</option>
                    <option>Noite</option>
                </select>
            </div>
            <div class="form-group col-md-6"ria>
                <label for="id_categoria">CATEGORIA</label>
                <select name="id_categoria" id="id_categoria" class="form-control">
                    <option value="" selected>Escolha a categoria</option>
                    @foreach($categorias as $categoria)
                    <option value="{{$categoria->id_categoria}}">{{$categoria->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="id_user">RESPONSÁVEL</label>
                <select name="id_user" id="id_user" class="form-control">
                    <option value="" selected>Nome do funcionário</option>
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="CRIAR CURSO">
            </div>
        </div>


    </form>

</div>
@endsection
