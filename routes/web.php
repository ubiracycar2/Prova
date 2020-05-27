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

Route::get('/login', function () {
     echo "Aqui vai ficar a página de login";
})->name('login');

Route::get('/cadastro', function () {
    echo "Aqui vai ficar a página de cadastro";
})->name('cadastro');

Route::get('/index', function () {
    echo "Aqui vai ficar a página inicial";
});

#Route::get('/', function () {
 #   return view('welcome');
#});
