<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Página Inicial
Route::get('/',[App\Http\Controllers\Controller::class, 'apresentarPaginaInicial'])->name('principal');

Auth::routes();


//Área de ADMIN.
Route::get('/home',[App\Http\Controllers\CategoriaController::class, 'index'])->name('home');

// Front End
Route::get('/home/front-end',[App\Http\Controllers\FrontEndController::class, 'index'])->name('front-end');

Route::get('/home/front-end/criar-curso',[App\Http\Controllers\CursoController::class, 'index'])->name('criarCursos');

Route::post('/home/front-end/salvar-curso',[App\Http\Controllers\CursoController::class, 'create'])->name('salvarCurso');




//Categoria Back End

Route::get('/home/back-end',[App\Http\Controllers\BackEndController::class, 'index'])->name('back-end');

Route::get('/home/back-end/gerenciarBackEnd',[App\Http\Controllers\BackEndController::class, 'gerenciarCursosBackEnd'])->name('gerenciarBackEnd');

//Rota que retorna todos os cursos

