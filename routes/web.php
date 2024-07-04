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

Route::get('/', function () {
    return view('administrativo.home');
});

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

Route::get('/mapa', function () {
    return view('administrativo.mapa');
});

