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





//Front-end (Home)
Route::get('admin/home', ['as' => 'admin.home.index', 'uses' =>'HomeController@index']);


//Carnês

Route::get('admin/carnes', ['as' => 'admin.carnes.index', 'uses' =>'CarnesController@index']);
Route::get('admin/carnes/create', ['as' => 'admin.carnes.create', 'uses' =>'CarnesController@create']);
Route::get('admin/carnes/edit/{id}', ['as' => 'admin.carnes.edit', 'uses' =>'CarnesController@edit']);
Route::get('admin/carnes/generate/{id}', ['as' => 'admin.carnes.generate', 'uses' =>'CarnesController@generate']);
Route::post('admin/carnes/store', ['as' => 'admin.carnes.store', 'uses' =>'CarnesController@store']);
Route::post('admin/carnes/update/{id}', ['as' => 'admin.carnes.update', 'uses' =>'CarnesController@update']);
Route::get('admin/carnes/destroy/{id}', ['as' => 'admin.carnes.destroy', 'uses' =>'CarnesController@destroy']);
Route::get('admin/carnes/show/{cpf}', ['as' => 'admin.carnes.show', 'uses' =>'CarnesController@show']);
Route::get('admin/carnes/confPagamento/{id}{status}', ['as' => 'admin.carnes.confPagamento', 'uses' =>'CarnesController@confPagamento']);
Route::get('admin/carnes/cancelarParcela/{id}{status}', ['as' => 'admin.carnes.cancelarParcela', 'uses' =>'CarnesController@cancelarParcela']);



Route::post('admin/carnes/ajaxAdd', ['as' => 'admin.carnes.ajaxAdd', 'uses' =>'CarnesController@ajaxAdd']);
Route::post('admin/carnes/ajaxParcela', ['as' => 'admin.carnes.ajaxParcela', 'uses' =>'CarnesController@ajaxParcela']);


//parcelamentos
Route::get('admin/parcelas', ['as' => 'admin.parcelas.index', 'uses' =>'ParcelasController@index']);
Route::get('admin/parcelas/defineParcelamento', ['as' => 'admin.parcelas.defineParcelamento', 'uses' =>'ParcelasController@index']);


//produtos

Route::get('admin/produtos', ['as' => 'admin.produtos.index', 'uses' =>'ProdutosController@index']);
Route::get('admin/produtos/create', ['as' => 'admin.produtos.create', 'uses' =>'ProdutosController@create']);
Route::get('admin/produtos/edit/{id}', ['as' => 'admin.produtos.edit', 'uses' =>'ProdutosController@edit']);
Route::post('admin/produtos/store', ['as' => 'admin.produtos.store', 'uses' =>'ProdutosController@store']);
Route::post('admin/produtos/update/{id}', ['as' => 'admin.produtos.update', 'uses' =>'ProdutosController@update']);
Route::get('admin/produtos/show/{id}', ['as' => 'admin.produtos.show', 'uses' =>'ProdutosController@show']);
Route::get('admin/produtos/destroy/{id}', ['as' => 'admin.produtos.destroy', 'uses' =>'ProdutosController@destroy']);


//Clientes

Route::get('admin/clientes', ['as' => 'admin.clientes.index', 'uses' =>'ClientesController@index']);
Route::get('admin/clientes/create', ['as' => 'admin.clientes.create', 'uses' =>'ClientesController@create']);
Route::get('admin/clientes/edit/{id}', ['as' => 'admin.clientes.edit', 'uses' =>'ClientesController@edit']);
Route::get('admin/clientes/show/{id}', ['as' => 'admin.clientes.show', 'uses' =>'ClientesController@show']);
Route::post('admin/clientes/store', ['as' => 'admin.clientes.store', 'uses' =>'ClientesController@store']);
Route::post('admin/clientes/update/{id}', ['as' => 'admin.clientes.update', 'uses' =>'ClientesController@update']);
Route::get('admin/clientes/destroy/{id}', ['as' => 'admin.clientes.destroy', 'uses' =>'ClientesController@destroy']);
Route::get('admin/clientes/get-carne/{cpf}', ['as' => 'admin.clientes.getCarne', 'uses' =>'ClientesController@getCarne']);
Route::get('admin/clientes/get-preco/{id}', ['as' => 'admin.clientes.getPrecoProduto', 'uses' =>'ClientesController@getPrecoProduto']);

//pega carnes do cliente


//Pagamentos
Route::get('admin/pagamentos', ['as' => 'admin.pagamentos.index', 'uses' =>'PagamentosController@index']);
Route::get('admin/pagamentos/create', ['as' => 'admin.pagamentos.create', 'uses' =>'PagamentosController@create']);
Route::get('admin/pagamentos/edit/{id}', ['as' => 'admin.pagamentos.edit', 'uses' =>'PagamentosController@edit']);
Route::post('admin/pagamentos/store', ['as' => 'admin.pagamentos.store', 'uses' =>'PagamentosController@store']);
Route::post('admin/pagamentos/update/{id}', ['as' => 'admin.pagamentos.update', 'uses' =>'PagamentosController@update']);
Route::get('admin/pagamentos/destroy/{id}', ['as' => 'admin.pagamentos.destroy', 'uses' =>'PagamentosController@destroy']);





//Pagamentos

Route::get('admin/contratos', ['as' => 'admin.contratos.index', 'uses' =>'ContratosController@index']);
Route::get('admin/contratos/create', ['as' => 'admin.contratos.create', 'uses' =>'ContratosController@create']);
Route::get('admin/contratos/edit/{id}', ['as' => 'admin.contratos.edit', 'uses' =>'ContratosController@edit']);
Route::post('admin/contratos/store', ['as' => 'admin.contratos.store', 'uses' =>'ContratosController@store']);
Route::post('admin/contratos/update/{id}', ['as' => 'admin.contratos.update', 'uses' =>'ContratosController@update']);
Route::get('admin/contratos/destroy/{id}', ['as' => 'admin.contratos.destroy', 'uses' =>'ContratosController@destroy']);


//reports

Route::get('/reports', function () {

    $report = new JasperPHP;

    $report->process(
        public_path() . '/report/hello_world.jrxml', //entrada
        public_path() . '/report/'.time().'_hello_world', //saida
        ['pdf', 'rtf', 'xml'], //formats
        [], //parametros
        [],  //fonte de dados
        ''//idioma do relatorio
        )->execute();
});

//Route::get('reports/json', 'CarnesController@jsonToPdf');



//Financeiro

//categorias
Route::get('admin/categorias', ['as' => 'admin.categorias.index', 'uses' =>'CategoriasController@index']);
Route::get('admin/categorias/create', ['as' => 'admin.categorias.create', 'uses' =>'CategoriasController@create']);
Route::get('admin/categorias/edit/{id}', ['as' => 'admin.categorias.edit', 'uses' =>'CategoriasController@edit']);
Route::post('admin/categorias/store', ['as' => 'admin.categorias.store', 'uses' =>'CategoriasController@store']);
Route::post('admin/categorias/update/{id}', ['as' => 'admin.categorias.update', 'uses' =>'CategoriasController@update']);
Route::get('admin/categorias/destroy/{id}', ['as' => 'admin.categorias.destroy', 'uses' =>'CategoriasController@destroy']);



//Despesas
Route::get('admin/despesas', ['as' => 'admin.despesas.index', 'uses' =>'DespesasController@index']);
Route::get('admin/despesas/create', ['as' => 'admin.despesas.create', 'uses' =>'DespesasController@create']);
Route::get('admin/despesas/edit/{id}', ['as' => 'admin.despesas.edit', 'uses' =>'DespesasController@edit']);
Route::post('admin/despesas/store', ['as' => 'admin.despesas.store', 'uses' =>'DespesasController@store']);
Route::post('admin/despesas/update/{id}', ['as' => 'admin.despesas.update', 'uses' =>'DespesasController@update']);
Route::get('admin/despesas/destroy/{id}', ['as' => 'admin.despesas.destroy', 'uses' =>'DespesasController@destroy']);


//Receitas

Route::get('admin/receitas', ['as' => 'admin.receitas.index', 'uses' =>'ReceitasController@index']);
Route::get('admin/receitas/create', ['as' => 'admin.receitas.create', 'uses' =>'ReceitasController@create']);
Route::get('admin/receitas/edit/{id}', ['as' => 'admin.receitas.edit', 'uses' =>'ReceitasController@edit']);
Route::post('admin/receitas/store', ['as' => 'admin.receitas.store', 'uses' =>'ReceitasController@store']);
Route::post('admin/receitas/update/{id}', ['as' => 'admin.receitas.update', 'uses' =>'ReceitasController@update']);
Route::get('admin/receitas/destroy/{id}', ['as' => 'admin.receitas.destroy', 'uses' =>'ReceitasController@destroy']);


//Relatorios

Route::get('admin/relatorios', ['as' => 'admin.relatorios.index', 'uses' =>'RelatoriosController@index']);



// Route::group(['prefix' => 'admin', as' => 'admin.'], function (){

// });
