<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// TEMPORÁRIO: só para pré-visualizar as telas. Apague quando criar as rotas reais.
Route::view('/preview/login', 'login');
Route::view('/preview/criancas', 'criancas.index');
Route::view('/preview/criancas/form', 'criancas.form');
Route::view('/preview/duende', 'duende.ordens');
Route::view('/preview/cartas', 'cartas.index');
Route::view('/preview/dashboard', 'dashboard');
