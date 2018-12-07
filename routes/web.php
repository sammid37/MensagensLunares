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

use Illuminate\Support\Facades\Input;
use App\User;
use App\Mensagem;

// Rota para a tela incial
Route::get('/', function() {
    return view('index');
})->name('index');

// Autenticando rotas
Auth::routes();

// Rotas do Controller Home
Route::get('/home', 'HomeController@index')->name('home');

// Rotas de mensagens
Route::resource('mensagem', 'MensagemController',[ 
	'names' => [
		'index' => 'mensagem',
		'create'=> 'mensagem.novamensagem',
		'store' => 'mensagem.salvarmensagem',
		'show' => 'mensagem.mostrarmensagem',
	]
]);//->middleware('auth');