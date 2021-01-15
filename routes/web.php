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
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', function () {
    return redirect('/inicio');
});

Route::group(['prefix' => '/cliente'], function (){
    Route::get('/cadastro' , 'ClienteController@indexCadastro')->name('indexClienteCadastro')->middleware('auth');
    Route::get('/show' , 'ClienteController@indexShow')->name('indexClienteShow')->middleware('auth');
    Route::get('/inicio' , 'ClienteController@indexDash')->name('indexClienteDash')->middleware('auth');
    Route::get('/info' , 'ClienteController@indexInfo')->name('indexClienteInfo')->middleware('auth');
    Route::get('/creditos' , 'CreditosClienteController@indexCreditos')->name('indexCreditos')->middleware('auth');
});

Route::group(['prefix' => '/cliente/cadastro-briefing'] , function (){
    Route::get('/conta-anuncio' , 'BriefingController@indexAnuncio')->name('indexAnuncio')->middleware('auth');
});

Route::get('/inicio' , function (){
   return view('dashboardUser');
})->name('inicio');

Route::get('/perfil' , 'UserController@indexPerfil')->name('perfilUser')->middleware('auth');

// ROTAS PARA CHEFIA
Route::get('/tabela-pontos' ,'PontosController@indexPontos')->name('indexPontos')->middleware('auth');
Route::get('/tabela-categorias' ,'CategoriaController@indexCategoria')->name('indexCategoria')->middleware('auth');
Route::post('pesquisapontos' , 'PontosController@buscaPontos')->name('buscaPontos')->middleware('auth');
Route::post('cadastroCategoria' , 'CategoriaController@create')->name('cadatroCategoria')->middleware('auth');
Route::post('cadatrapeca' , 'PontosController@create')->name('cadastrapeca')->middleware('auth');

Route::get('/cat-peca/{id}', 'ClienteController@modelPeca')->name('buscaPeca');
Route::get('/buscaValorPeca/{id}', 'ClienteController@modelValorPeca')->name('buscaValorPeca');
Route::get('/puxaCidade/{id}', 'ClienteController@puxaCidade')->name('puxaCidade');
