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
Route::get('/home/criar-categoria',[App\Http\Controllers\CategoriaController::class,'create'])->name('categoria-form');

//Armazenamento da nova categoria criada
Route::post('/home/salvar-categoria',[App\Http\Controllers\CategoriaController::class, 'store'])->name('criarCategoria');

//Buscar usuários, categorias e cursos cadastrados -- Montar tabela e campos para criação de novos cursos
Route::get('/home/apresentarCursos',[App\Http\Controllers\CursoController::class, 'index'])->name('apresentarCursos');

//Formulário para criação de novo curso
Route::get('/home/criar-curso',[App\Http\Controllers\CursoController::class, 'create'])->name('criar-curso-form');

//Armazenamento do novo curso criado
Route::post('/home/salvar-curso',[App\Http\Controllers\CursoController::class, 'store'])->name('criarCurso');


Route::delete('/cursos/$curso/{id_curso}',[App\Http\Controllers\CursoController::class,'destroy']);



//Rota que retorna todos os cursos

