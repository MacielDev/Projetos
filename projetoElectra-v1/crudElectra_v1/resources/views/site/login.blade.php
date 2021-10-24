@extends('site.master.layout')

@section('content')


<main class="login-main-position form-signin body_login">

    <form class="text-center form-login-size" method="post" action="{{route('aluno.login.logar')}}">
        @csrf
        <h1 class="h1 mb-1 fw-bold">Já estuda na Electra?</h1>
        <h3 class="h3 mb-4 fw-light">Então faça seu login e bons estudos!</h3>
        @if($errors->all())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
        @endforeach
        @endif
        <div class="form-floating">
            <input type="text" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">E-mail</label>
        </div>
        <div class="form-floating ">
            <input type="password" name="password" class="form-control" id="password" placeholder="Informe sua senha">
            <label for="password">Senha</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> LEMBRAR
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary bt-login-color" type="submit">ENTRAR</button>
    </form>

</main>


@endsection
