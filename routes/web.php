<?php


use Illuminate\Support\Facades\Route;



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
use App\Http\Controllers\MapController;
use App\Http\Controllers\conteudo;



Route::get('/conteudo/{id}', [conteudo::class, 'show'])->name('administrativo.home');


Route::get('/', [MapController::class, 'administrativohome'])->name('administrativo.home');

/*
Route::get('/', function () {
    return view('administrativo.home');
});
*/


Route::get('/campo', function () {
    return view('administrativo.campo');
});

Route::get('/filtros', function () {
    return view('administrativo.filtros');
});

Route::get('/adm', function () {
    return view('administrativo.adm');
});

Route::get('/perfil', function () {
    return view('administrativo.perfil');
});

Route::get('/bacia', function () {
    return view('administrativo.formulario_bacia');
});

Route::get('/pocos', function () {
    return view('administrativo.formulario_pocos');
});

Route::get('/campos', function () {
    return view('administrativo.formulario_campo');
});

Route::get('/pocos', 'App\Http\Controllers\Administrativo\PocosController@listar');
Route::get('/pocos/cadastro', 'App\Http\Controllers\Administrativo\PocosController@cadastro');

