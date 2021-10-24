<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    public function acessarAreaAluno()
    {
        //Verificando se existe sessão e se é valida
        if (Auth::check() === true) { //
            //verifiando o usuário logado
            //dd(Auth::user());

            return view('site.areaAluno.painelControleAluno');
        }
        return redirect()->route('aluno.login');
    }

    public function mostrarLogin()
    {
        return view('site.login');
    }

    //Validar campos e comparar com a Model-User
    public function login(Request $request)
    {
        //Verificando os dados enviados para logins
        // var_dump($request->all());


        //Verificação de campos em branco
        if (
            $request->email == "" &&
            $request->password == ""
        ) {
            return redirect()->back()->withInput()->withErrors(['Informe um e-mail e senha válidos!']);
        }

        //Verificação de validade e-mail
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->withErrors(['O e-mail informado não é válido!']);
        }

        //criando array associativo
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        //verificação dos dados enviados pelo usuario com os dados da model (users)
        if (Auth::attempt(
            $credentials
        )) {
            return view('site.areaAluno.painelControleAluno');
        }
        return redirect()->back()->withInput()->withErrors(['A senha informada não é válida']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
