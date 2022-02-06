<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/series',
    'App\Http\Controllers\SeriesController@index'
);
Route::get(
    '/series/criar',
    'App\Http\Controllers\SeriesController@create'
);

Route::post(
    '/series/criar','App\Http\Controllers\SeriesController@store'
);
