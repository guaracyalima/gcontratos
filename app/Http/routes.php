<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Repositories\CarnesRepository;
use JasperPHP\JasperPHP;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin','as' => 'admin.'], function (){

    Route::get('relatorios/{date}', ['as' => 'relatorios.index', 'uses' =>'RelatoriosController@index']);

});

Route::group(['prefix' => 'admin', 'middleware' =>'auth.check', 'as' => 'admin.'], function (){
//Front-end (Home)
Route::get('home', ['as' => 'home.index', 'uses' =>'HomeController@index']);

//Carnês

Route::get('carnes', ['as' => 'carnes.index', 'uses' =>'CarnesController@index']);
Route::get('carnes/create', ['as' => 'carnes.create', 'uses' =>'CarnesController@create']);
Route::get('carnes/edit/{id}', ['as' => 'carnes.edit', 'uses' =>'CarnesController@edit']);
Route::get('carnes/generate/{id}', ['as' => 'carnes.generate', 'uses' =>'CarnesController@generate']);
Route::post('carnes/store', ['as' => 'carnes.store', 'uses' =>'CarnesController@store']);
Route::post('carnes/update/{id}', ['as' => 'carnes.update', 'uses' =>'CarnesController@update']);
Route::get('carnes/destroy/{id}', ['as' => 'carnes.destroy', 'uses' =>'CarnesController@destroy']);
Route::get('carnes/show/{cpf}', ['as' => 'carnes.show', 'uses' =>'CarnesController@show']);
Route::get('carnes/confPagamento/{id}{status}', ['as' => 'carnes.confPagamento', 'uses' =>'CarnesController@confPagamento']);
Route::get('carnes/cancelarParcela/{id}{status}', ['as' => 'carnes.cancelarParcela', 'uses' =>'CarnesController@cancelarParcela']);



Route::post('carnes/ajaxAdd', ['as' => 'carnes.ajaxAdd', 'uses' =>'CarnesController@ajaxAdd']);
Route::post('carnes/ajaxParcela', ['as' => 'carnes.ajaxParcela', 'uses' =>'CarnesController@ajaxParcela']);


//parcelamentos
Route::get('parcelas', ['as' => 'parcelas.index', 'uses' =>'ParcelasController@index']);
Route::get('parcelas/defineParcelamento', ['as' => 'parcelas.defineParcelamento', 'uses' =>'ParcelasController@index']);


//produtos

Route::get('produtos', ['as' => 'produtos.index', 'uses' =>'ProdutosController@index']);
Route::get('produtos/create', ['as' => 'produtos.create', 'uses' =>'ProdutosController@create']);
Route::get('produtos/edit/{id}', ['as' => 'produtos.edit', 'uses' =>'ProdutosController@edit']);
Route::post('produtos/store', ['as' => 'produtos.store', 'uses' =>'ProdutosController@store']);
Route::post('produtos/update/{id}', ['as' => 'produtos.update', 'uses' =>'ProdutosController@update']);
Route::get('produtos/show/{id}', ['as' => 'produtos.show', 'uses' =>'ProdutosController@show']);
Route::get('produtos/destroy/{id}', ['as' => 'produtos.destroy', 'uses' =>'ProdutosController@destroy']);


//Clientes

Route::get('clientes', ['as' => 'clientes.index', 'uses' =>'ClientesController@index']);
Route::get('clientes/create', ['as' => 'clientes.create', 'uses' =>'ClientesController@create']);
Route::get('clientes/edit/{id}', ['as' => 'clientes.edit', 'uses' =>'ClientesController@edit']);
Route::get('clientes/show/{id}', ['as' => 'clientes.show', 'uses' =>'ClientesController@show']);
Route::post('clientes/store', ['as' => 'clientes.store', 'uses' =>'ClientesController@store']);
Route::post('clientes/update/{id}', ['as' => 'clientes.update', 'uses' =>'ClientesController@update']);
Route::get('clientes/destroy/{id}', ['as' => 'clientes.destroy', 'uses' =>'ClientesController@destroy']);
Route::get('clientes/get-carne/{cpf}', ['as' => 'clientes.getCarne', 'uses' =>'ClientesController@getCarne']);
Route::get('clientes/get-preco/{id}', ['as' => 'clientes.getPrecoProduto', 'uses' =>'ClientesController@getPrecoProduto']);

//pega carnes do cliente


//Pagamentos
Route::get('pagamentos', ['as' => 'pagamentos.index', 'uses' =>'PagamentosController@index']);
Route::get('pagamentos/create', ['as' => 'pagamentos.create', 'uses' =>'PagamentosController@create']);
Route::get('pagamentos/edit/{id}', ['as' => 'pagamentos.edit', 'uses' =>'PagamentosController@edit']);
Route::post('pagamentos/store', ['as' => 'pagamentos.store', 'uses' =>'PagamentosController@store']);
Route::post('pagamentos/update/{id}', ['as' => 'pagamentos.update', 'uses' =>'PagamentosController@update']);
Route::get('pagamentos/destroy/{id}', ['as' => 'pagamentos.destroy', 'uses' =>'PagamentosController@destroy']);
//Pagamentos

Route::get('contratos', ['as' => 'contratos.index', 'uses' =>'ContratosController@index']);
Route::get('contratos/create', ['as' => 'contratos.create', 'uses' =>'ContratosController@create']);
Route::get('contratos/edit/{id}', ['as' => 'contratos.edit', 'uses' =>'ContratosController@edit']);
Route::post('contratos/store', ['as' => 'contratos.store', 'uses' =>'ContratosController@store']);
Route::post('contratos/update/{id}', ['as' => 'contratos.update', 'uses' =>'ContratosController@update']);
Route::get('contratos/destroy/{id}', ['as' => 'contratos.destroy', 'uses' =>'ContratosController@destroy']);

//reports
//categorias
Route::get('categorias', ['as' => 'categorias.index', 'uses' =>'CategoriasController@index']);
Route::get('categorias/create', ['as' => 'categorias.create', 'uses' =>'CategoriasController@create']);
Route::get('categorias/edit/{id}', ['as' => 'categorias.edit', 'uses' =>'CategoriasController@edit']);
Route::post('categorias/store', ['as' => 'categorias.store', 'uses' =>'CategoriasController@store']);
Route::post('categorias/update/{id}', ['as' => 'categorias.update', 'uses' =>'CategoriasController@update']);
Route::get('categorias/destroy/{id}', ['as' => 'categorias.destroy', 'uses' =>'CategoriasController@destroy']);
//Despesas
Route::get('despesas', ['as' => 'despesas.index', 'uses' =>'DespesasController@index']);
Route::get('despesas/create', ['as' => 'despesas.create', 'uses' =>'DespesasController@create']);
Route::get('despesas/edit/{id}', ['as' => 'despesas.edit', 'uses' =>'DespesasController@edit']);
Route::post('despesas/store', ['as' => 'despesas.store', 'uses' =>'DespesasController@store']);
Route::post('despesas/update/{id}', ['as' => 'despesas.update', 'uses' =>'DespesasController@update']);
Route::get('despesas/destroy/{id}', ['as' => 'despesas.destroy', 'uses' =>'DespesasController@destroy']);


//Receitas

Route::get('receitas', ['as' => 'receitas.index', 'uses' =>'ReceitasController@index']);
Route::get('receitas/create', ['as' => 'receitas.create', 'uses' =>'ReceitasController@create']);
Route::get('receitas/edit/{id}', ['as' => 'receitas.edit', 'uses' =>'ReceitasController@edit']);
Route::post('receitas/store', ['as' => 'receitas.store', 'uses' =>'ReceitasController@store']);
Route::post('receitas/update/{id}', ['as' => 'receitas.update', 'uses' =>'ReceitasController@update']);
Route::get('receitas/destroy/{id}', ['as' => 'receitas.destroy', 'uses' =>'ReceitasController@destroy']);

Route::get('relatorios', ['as' => 'relatorios.index', 'uses' =>'RelatoriosController@index']);

});
