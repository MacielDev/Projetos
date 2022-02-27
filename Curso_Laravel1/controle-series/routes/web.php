<?php

use Illuminate\Support\Facades\Route;


Route::get(
    '/series',
    'App\Http\Controllers\SeriesController@index'
)->name('listar_series');
Route::get(
    '/series/criar',
    'App\Http\Controllers\SeriesController@create'
)->name('form_criar_serie');

Route::post(
    '/series/criar',
    'App\Http\Controllers\SeriesController@store'
);

Route::delete(
    '/series/remover/{id}',
    'App\Http\Controllers\SeriesController@destroy'
);

Route::get('/series/{serieId}/temporadas','App\Http\Controllers\TemporadasController@index')->name('temporadas');

Route::post('/series/{serieId}/editaNome','App\Http\Controllers\SeriesController@editaNome');

Route::get('/series/{temporadaId}/episodios','App\Http\Controllers\EpisodiosController@index');

Route::post('/temporada/{temporadaId}/episodios/assistir','App\Http\Controllers\EpisodiosController@assistir');


