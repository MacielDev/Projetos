@extends('layouts.app')

@section('content')
<div class="container register_position">
    <div class="row justify-content-center">
        <div class="col-md-12">

                <h2 class="pl-5 ml-5 text-center">{{ __('Escolha seu usuário e senha!!!') }}</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <!--Novo Campo CPF-->
                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control" name="cpf" required autocomplete="cpf">
                            </div>
                        </div>

                        <!--Novo Campo Idade-->
                        <div class="form-group row">
                            <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('Idade') }}</label>

                            <div class="col-md-6">
                                <input id="idade" type="text" class="form-control" name="idade" required autocomplete="idade">
                            </div>
                        </div>
                        <!--Novo Campo Plano-->
                        <div class="form-group row">
                            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('cargo') }}</label>

                            <div class="col-md-6">
                                <select class="custom-select" id="cargo" name="cargo">
                                    <option selected></option>

                                    <option value="instrutor">Instrutor</option>
                                    <option value="coordenador">Coordenador</option>
                                    <option value="diretor">Diretor</option>


                                </select>
                            </div>


                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>
@endsection
