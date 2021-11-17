<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/blog', 'App\Http\Controllers\BlogController')->middleware('auth');

Route::get('cliente/cadastrar', 'App\Http\Controllers\ClienteController@cadastrar');

Route::resource('/cliente', 'App\Http\Controllers\ClienteController')->middleware('auth');
Route::get('/cliente', 'App\Http\Controllers\ClienteController@index')->name('listCliente');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('carro/cadastrar', 'App\Http\Controllers\CarrosController@cadastrar');

Route::get('all-carros', 'App\Http\Controllers\CarrosController@index')->name('list');

Route::resource('/carro', 'App\Http\Controllers\CarrosController');

Route::get('all-cotacoes', 'App\Http\Controllers\CotacaoController@index')->name('cotacoes')->middleware('auth');;

Route::get('cotacao/cadastrar', 'App\Http\Controllers\CotacaoController@cadastrar')->middleware('auth');

Route::post('cotacao/historico', 'App\Http\Controllers\CotacaoController@historico')->name('historico')->middleware('auth');;

Route::get('cotacao/email/status', 'App\Http\Controllers\CotacaoController@sendstatus')->name('mailsend');

Route::get('cotacao/status/update/{situacao}/{registro}', 'App\Http\Controllers\CotacaoController@updateStatus')->name('updatestatus');

Route::post('cotacao/send/requisicao', 'App\Http\Controllers\CotacaoController@sendcontrato')->name('requisicao');

Route::get('upload', function () {
    return view('upload');
});
Route::post('uploadfileplanilha', 'App\Http\Controllers\CotacaoController@uploadFilePlanilha')->name('uploadfileplanilha')->middleware('auth');;

Route::resource('/cotacao', 'App\Http\Controllers\CotacaoController');


//
