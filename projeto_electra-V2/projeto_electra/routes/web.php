<?php

use App\Http\Controllers\CursoController;
use App\Models\Curso;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Página Inicial
Route::get('/',[App\Http\Controllers\HomeController::class, 'apresentarPaginaInicial'])->name('principal');

Auth::routes();

//Área de ADMIN.
Route::get('/home',[App\Http\Controllers\CategoriaController::class, 'index'])->name('home');

//Formulário para a criação de novas categorias
Route::get('/home/create',[App\Http\Controllers\CategoriaController::class,'create'])->name('create');

//Armazenamento da nova categoria criada
Route::post('/home/categoria/store',[App\Http\Controllers\CategoriaController::class, 'store'])->name('store');

//Buscar usuários, categorias e cursos cadastrados -- Montar tabela e campos para criação de novos cursos
Route::get('/home/apresentarCursos',[App\Http\Controllers\CursoController::class, 'index'])->name('apresentarCursos');

//Formulário para criação de novo curso
Route::get('/home/create',[App\Http\Controllers\CursoController::class, 'create'])->name('create');

//Armazenamento do novo curso criado
Route::post('/home/store',[App\Http\Controllers\CursoController::class, 'store'])->name('store');


Route::delete('/cursos/$curso/{id_curso}',[App\Http\Controllers\CursoController::class,'destroy']);





