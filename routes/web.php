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
    Route::get('/info/{name}' , 'ClienteController@indexInfo')->name('indexClienteInfo')->middleware('auth');
    Route::get('/creditos/{name}' , 'CreditosClienteController@indexCreditos')->name('indexCreditos')->middleware('auth');
    Route::post('cadatraClien' , 'ClienteController@create')->name('createClient')->middleware('auth');
    Route::post('buscaActive' , 'ClienteController@mostraAtivos')->name('buscaActive')->middleware('auth');
});

Route::get('/funcionarios', 'FuncionariosController@index')->name('indexFuncionario')->middleware('auth');

Route::group(['prefix' => '/cliente/cadastro-briefing'] , function (){
    Route::get('/conta_anuncio/{name}' , 'BriefingController@indexContaAnuncio')->name('indexContaAnuncio')->middleware('auth');
    Route::get('/geral/{name}' , 'BriefingController@indexGeral')->name('indexGeral')->middleware('auth');
    Route::post('cadastrarcontaanuncio/{id}' , 'BriefingController@createBanuncio')->name('cadastroContaAnuncio')->middleware('auth');
    Route::post('cadastrargeral/{id}' , 'BriefingController@createBgeral')->name('cadastroGeral')->middleware('auth');
});

Route::get('/inicio' , function (){
    $cliente = \App\Client::all();
    $total = count($cliente);

    $funcionarios = \App\User::where('funcionario' , '<>' , 'Chefia')->get();
    $totalFuncionarios = count($funcionarios);

    $categorias = \App\Category::all();
    $totalCategorias = count($categorias);

    $pecas = \App\Piece::all();
    $totalPecas = count($pecas);

   return view('dashboardUser' , [
       'totalClientes' => $total,
       'totalFuncionarios' => $totalFuncionarios,
       'totalCategorias' => $totalCategorias,
       'totalPecas' => $totalPecas
   ]);
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

// ROTA DE CADASTRO DE PECA
Route::post('cadastroPecaSub/{id}', 'HistoryCreditController@subPontos')->name('subCredit')->middleware('auth');

// FUNCAO DE ATIVA E DESATIVA CLIENTE
Route::get('ativadesativa/{id}', 'ClienteController@active')->name('active')->middleware('auth');

//VISUALIZACAO DE BRIEFING
Route::group(['prefix' => '/cliente/visualizacao-briefing'] , function (){
    Route::get('mostraGeral/{name}', 'VeBriefingController@indexGeral')->name('veGeral')->middleware('auth');
});

//GERAL PDF
Route::get('/geralPdf/{id}' , 'BriefingController@createPDFGeral')->name('pdfbGeral');
