<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\Conteudo; // Ajuste para o nome correto do controlador
use App\Http\Controllers\Administrativo\PocosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rota para exibir conteúdo específico com base no ID
Route::get('/conteudo/{id}', [Conteudo::class, 'show'])->name('conteudo.show');

// Rota para a página inicial
Route::get('/', [MapController::class, 'administrativohome'])->name('administrativo.home');

// Outras rotas
Route::get('/bacia', function () {
    return view('administrativo.formulario_bacia');
})->name('bacia');

Route::get('/campo', function () {
    return view('administrativo.formulario_campo');
})->name('campo');

Route::get('/pocos', function () {
    return view('administrativo.formulario_pocos');
})->name('pocos');

Route::get('/perfil', function () {
    return view('administrativo.perfil');
})->name('perfil');

Route::get('/logistica', function () {
    return view('administrativo.logistica'); // Adicione a view correta aqui
})->name('logistica');

Route::get('/historico', function () {
    return view('administrativo.historico'); // Adicione a view correta aqui
})->name('historico');

Route::get('/sobre_nos', function () {
    return view('administrativo.sobre_nos'); // Adicione a view correta aqui
})->name('sobre_nos');


