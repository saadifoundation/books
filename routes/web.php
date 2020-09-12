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

Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/levels/{level}', 'LevelController@show')->name('level');

Route::get('/collections/{collection}', 'CollectionController@show')->name('collection');

Route::get('/tags/{tag}', 'TagController@show')->name('tag');

Route::resource('books', 'BookController');

Route::redirect('/{book}', '/books/{book}');

Route::resource('users', 'UserController');
