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

Route::get('/inicio' , function (){
   return view('dashboardUser');
})->name('inicio');

Route::get('/perfil' , 'UserController@indexPerfil')->name('perfilUser')->middleware('auth');
