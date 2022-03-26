@extends('layout')

@section('cabecalho')
    Registrar-se
@endsection

@section('conteudo')
    <div class="container">
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input id="name" type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input id="email" type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input id="password" type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-primary mt-3">
                Registrar
            </button>
        </form>
    </div>
@endsection
