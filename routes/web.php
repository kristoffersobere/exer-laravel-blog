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

Route::get('/articles', 'ArticlesController@showArticles');

Route::get('/articles/create','ArticlesController@createForm');

Route::get('/articles/{id}', 'ArticlesController@show');

Route::post('/articles/create','ArticlesController@store');



Route::get('/articles/{id}/delete','ArticlesController@delete');

Route::get('/articles/{id}/edit','ArticlesController@editForm');

Route::post('/articles/{id}/edit','ArticlesController@update');

Route::post('/articles','CommentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');