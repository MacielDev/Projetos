@extends('categorias.categoria')

@section('content-front')

<div class="container conteudo-position">

    <form action="{{route('salvarCurso')}}" method="post">
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
            <div class="form-group col-md-6">
                <label for="categoria_id_fk">CATEGORIA</label>
                <select name="categoria_id_fk" id="categoria_id_fk" class="form-control">
                    <option value="" selected>Escolha a categoria</option>
                    @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="user_id">RESPONSÁVEL</label>
                <select name="user_id" id="user_id" class="form-control">
                    <option value="" selected>Nome do funcionário</option>
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-12">
                <input type="submit" class="btn-lg btn-block btn-primary" value="CRIAR CURSO">
            </div>
        </div>


    </form>

</div>
@endsection
