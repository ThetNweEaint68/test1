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

Route::get('/', function () {
    return view('welcome');
});
//Registration
Route::get('/register', 'RegisterController@create')->name('register.create');
Route::post('/register', 'RegisterController@store')->name('register.store');
Route::get('/register/{user}/edit','RegisterController@edit')->name('register.edit');
Route::patch('/register/{user}','RegisterController@update')->name('register.update');
// '/user/{id}/edit'
Route::get('/profile','RegisterController@index');
//Authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Articles
Route::get('/articles','ArticleController@index')->name('articles.index');
Route::post('/articles','ArticleController@store')->name('articles.store');
Route::get('/articles/create','ArticleController@create')->name('articles.create');
Route::get('/articles/{article}','ArticleController@show')->name('articles.show');
Route::get('/articles/{article}/edit','ArticleController@edit')->name('articles.edit');
Route::put('/articles/{article}','ArticleController@update')->name('articles.update');
//Comment
Route::post('/articles/{article}/comments', 'CommentController@store')->name('comments.store');
//files storage
Route::get('/files/upload','ResourceController@create')->name('resource.create');
Route::post('/files/upload','ResourceController@store')->name('resource.store');
Route::get('/files/view','ResourceController@index')->name('resource.index');
Route::get('/files/{id}/show','ResourceController@show')->name('resource.show');
