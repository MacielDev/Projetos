@extends('layouts.app')


@section('content')
<main class="main_login form-signin text-center">
    <h1 class="h3 mb-3 fw-normal">Bem vindo a Electra</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-floating">
            <input id="email" type="email" class="mb-3 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">


            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-floating">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">


            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <div class="checkbox mb-3">
            <label for="remember">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('Lembrar') ? 'checked' : '' }}> {{ __('Lembrar') }}
            </label>
        </div>


        <button type="submit" class="w-100 btn btn-lg btn-primary">
            {{ __('Login') }}
        </button>

        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Recuperar senha?') }}
        </a>
        @endif


    </form>

</main>
@endsection
