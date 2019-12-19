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
    return view('auth.login');
});

// Route::get('/','UserController@home');

// Route::get('/login', 'UserController@login')->name('login');


Route::resource('produtos', 'ProdutosController');

Route::resource('fornecedores','FornecedoresController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
