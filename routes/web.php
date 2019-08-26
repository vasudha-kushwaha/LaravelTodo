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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Todos Routes-Start
Route::get('todo', 'TodoController@index')->name('todo.view');
//same name kai 2 route ni hotai h

Route::get('todo-home', 'TodoController@home')->name('todo.home');

Route::get('about', 'TodoController@about')->name('todo.about');

Route::get('blogs', 'TodoController@blogs')->name('todo.blogs');

Route::get('authors', 'TodoController@authors')->name('todo.authors');

Route::get('admin', 'TodoController@adminlogin')->name('todo.adminlogin');

Route::get('curd', 'TodoController@curd')->name('todo.curd');

//Todos Routes-End>middelware('auth')