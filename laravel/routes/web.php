<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/todos/add', 'TodoController@store');
Route::get('/todos/all', 'TodoController@index');
Route::get('/todos/{id}', 'TodoController@show');
Route::post('/todos/{id}/edit', 'TodoController@update');
Route::post('/todos/{id}/delete', 'TodoController@destroy');
