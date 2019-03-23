<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('index');
Route::get('/produto/{id}', 'HomeController@produto')->name('produto');

// Rotas do Admin
Route::group(['prefix' => 'admin'], function(){
	Route::get('produtos', 'Admin\ProdutoController@index')->name('admin.produtos');
	Route::get('produtos/adicionar', 'Admin\ProdutoController@adicionar')->name('admin.produtos.adicionar');
	Route::get('produtos/salvar', 'Admin\ProdutoController@salvar')->name('admin.produtos.salvar');
	Route::get('produtos/editar/{id}', 'Admin\ProdutoController@editar')->name('admin.produtos.editar');
	Route::get('produtos/atualizar/{id}', 'Admin\ProdutoController@atualizar')->name('admin.produtos.atualizar');
	Route::get('produtos/deletar/{id}', 'Admin\ProdutoController@deletar')->name('admin.produtos.deletar');

	Route::get('cupons', 'Admin\CupomController@index')->name('admin.cupons');
	Route::get('cupons/adicionar', 'Admin\CupomController@adicionar')->name('admin.cupons.adicionar');
	Route::get('cupons/salvar', 'Admin\CupomController@salvar')->name('admin.cupons.salvar');
	Route::get('cupons/editar/{id}', 'Admin\CupomController@editar')->name('admin.cupons.editar');
	Route::get('cupons/atualizar/{id}', 'Admin\CupomController@atualizar')->name('admin.cupons.atualizar');
	Route::get('cupons/deletar/{id}', 'Admin\CupomController@deletar')->name('admin.cupons.deletar');
});


