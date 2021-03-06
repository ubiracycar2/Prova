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

Route::get('/login', 'LoginController@view')->name('login');
Route::post('/logar','LoginController@logar')->name('logar');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/cadastro', 'CadastroController@view')->name('usuario.cadastro');
Route::post('/cadastrar', 'CadastroController@cadastrar')->name('cadastrar.usuario');
Route::get('/', 'IndexController@view')->name('index');
Route::get('/informativo', 'IndexController@informativo')->name('informativo')->middleware('login');
Route::get('/index', 'IndexController@logado')->name('index.logado')->middleware('login');


#Route::get('/', function () {
 #   return view('welcome');
#});