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
Route::get('teste', function () {
    
});

Route::get('/login', 'LoginController@view')->name('login');
Route::get('/cadastro', 'CadastroController@view')->name('usuario.cadastro');
Route::get('/index', 'IndexController@view')->name('index');


#Route::get('/', function () {
 #   return view('welcome');
#});