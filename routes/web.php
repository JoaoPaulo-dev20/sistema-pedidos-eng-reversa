<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

// Atividade 1
Route::get('/ola', function () {
    return 'Olá, Laravel!';
});

// Atividade 2
Route::get('/curso/ads', function () {
    return 'Curso de Análise e Desenvolvimento de Sistemas';
});

// Atividade 3
Route::get('/curso/web', function () {
    return 'Disciplina Programação Web I';
});

// Atividade 4
Route::get('/sobre', function () {
    return view('sobre');
});

// Atividade 5
Route::get('/contato', function () {
    return view('contato');
});

// Atividade 6
Route::get('/institucional/missao', function () {
    return view('missao');
});


// Atividades 7, 8, 9, 10
Route::get('/empresa',  [PaginaController::class, 'empresa']);
Route::get('/servicos', [PaginaController::class, 'servicos']);
Route::get('/portfolio',[PaginaController::class, 'portfolio']);
Route::get('/blog',     [PaginaController::class, 'blog']);
Route::get('/equipe',   [PaginaController::class, 'equipe']);

// Atividade 11
Route::get('/usuario/{nome}', function (string $nome) {
    return "Usuário: $nome";
});

// Atividade 12
Route::get('/produto/{id}', [PaginaController::class, 'produto']);