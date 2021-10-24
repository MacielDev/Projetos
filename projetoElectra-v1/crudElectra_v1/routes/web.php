<?php

use Illuminate\Support\Facades\Route;


//ROTA PARA HOME
Route::get('/','ControllerHome@acessarHome')->name('site.home');

//ROTA DE HOME PARA PLANOS
Route::get('/planos', function () {
    return view('site.planos');
})->name('site.planos');

//ROTA DE HOME PARA TELA DE LOGIN
Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

//Rota PARA ÁREA DO ALUNO
Route::get('/aluno','AuthLoginController@acessarAreaAluno')->name('aluno');

//ROTA DE LOGIN PARA LOGINS (NÃO AUTENTICADO)
Route::get('/aluno/login','AuthLoginController@mostrarLogin')->name('aluno.login');

//ROTA PARA LOGIN
Route::post('/aluno/login/logar','AuthLoginController@login')->name('aluno.login.logar');

//ROTA PARA LOGOUT
Route::get('/aluno/logout','AuthLoginController@logout')->name('aluno.logout');








