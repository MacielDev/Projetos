<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/** ROTAS PARA AUTENTICAÇÃO PADRÃO DO lARAVEL **/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  // HomeController

/**ROTA PARA REGISTRO PERSONALIZADO DE USUARIOS**/

Route::get('/registrar','App\Http\Controllers\RegistroController@create');
Route::post('/registrar','App\Http\Controllers\RegistroController@store');

/** ROTAS PARA ALTENTICAÇÃO - PERSONALIZADAS **/

Route::get('/entrar','App\Http\Controllers\EntrarController@index');
Route::post('/entrar','App\Http\Controllers\EntrarController@entrar');


/** ROTAS PARA O INDEX DO SISTEMA - lISTAR SERIES **/
Route::get(
    '/series',
    'App\Http\Controllers\SeriesController@index'
)->name('listar_series');

/** ROTAS PARA CRUD COMPLETO ----> CRIAR/DELETAR/EDITAR  **/

/****************************** ROTA PARA CRIAR SÉRIE *************************************/

/** FORMULÁRIO DE CRIAÇÃO DE SERIE **/
Route::get(
    '/series/criar',
    'App\Http\Controllers\SeriesController@create'
)->name('form_criar_serie');


/** SALVAR SERIE -----> STORE **/
Route::post(
    '/series/criar',
    'App\Http\Controllers\SeriesController@store'
);

/** ROTA PARA DELETAR SÉRIE **/
Route::delete(
    '/series/remover/{id}',
    'App\Http\Controllers\SeriesController@destroy'
);

/** ROTA PARA EDITAR SÉRIE **/
Route::post('/series/{serieId}/editaNome','App\Http\Controllers\SeriesController@editaNome');

Route::get('/series/{serieId}/temporadas','App\Http\Controllers\TemporadasController@index')->name('temporadas');

Route::get('/temporadas/{temporada}/episodios','App\Http\Controllers\EpisodiosController@index');

/**ROTA PARA MARCAR OS EPISÓDIOS JÁ ASSISTIDOS POR TEMPORADAS **/
Route::post('/temporadas/{temporada}/episodios/assistir','App\Http\Controllers\EpisodiosController@assistir');



