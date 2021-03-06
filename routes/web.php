<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['as'=>'movies.'],function (){
   Route::get('/','MoviesController@index')->name('index');
    Route::get('/show/{id}','MoviesController@show')->name('show');

});

Route::group(['as'=>'actors.'],function (){
    Route::get('/','ActorsController@index')->name('index');
    Route::get('/show/{actor}','ActorsController@show')->name('show');

});
