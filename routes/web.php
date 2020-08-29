<?php

use Illuminate\Support\Facades\Route;
use App\Produto;
use App\Anotacao;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Exemplo de rota: 
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/pesquisa', function () {
    return view('pesquisa');
});


//Categoria

Route::get('/categoria','ControladorCategoria@index');
Route::get('/novacategoria','ControladorCategoria@create');
Route::post('/novacategoria/nova','ControladorCategoria@store');
Route::get('/categorias/apagar/{id}','ControladorCategoria@destroy');
Route::get('/editarcategoria/editar/{id}','ControladorCategoria@edit');
Route::post('/editarcategoria/{id}','ControladorCategoria@update');


//Produto
Route::get('/produto','ControladorProduto@index');
Route::get('/produto/create','ControladorProduto@create');
Route::post('/store','ControladorProduto@store');
Route::get('produto/editar/{id}','ControladorProduto@edit');
Route::get('produto/apagar/{id}','ControladorProduto@destroy');


//Anotacao
Route::get('/ferramentas','ControladorAnotacao@index');
Route::get('/ferramentas/novo','ControladorAnotacao@create');
Route::get('/ferramentas/editar/{id}','ControladorAnotacao@edit');
Route::get('/ferramentas/apagar/{id}','ControladorAnotacao@destroy');
Route::get('/ferramentas/store','ControladorAnotacao@store');


//
