<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'SitesController@index');
Route::get('/about', 'SitesController@about');

Route::get('/articles', 'ArticleController@index');
// Route是有顺序的，如果create在‘/articles/{id}’后面， 就会错误解析create为{id}参数
Route::get('/articles/create', 'ArticleController@create');
Route::get('/articles/{id}', 'ArticleController@show');
Route::post('/articles', 'ArticleController@store');
Route::get('/articles/{id}/edit', 'ArticleController@edit');
Route::patch('/articles/{id}', 'ArticleController@update');

// 这个就是Route::controller的写法
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Route::resource('articles', 'ArticleController'); // laravel5.1可用 5.2报错
//Route::controller('articles', 'ArticleController'); // 使用不方便
