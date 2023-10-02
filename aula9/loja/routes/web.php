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
use App\Http\Controllers\Produtos;
use App\Http\Controllers\Hello;

// configuração de rota
Route::get('/produtos', [ Produtos::class, 'exibirProdutos' ]);

// difiniu a rota > [ Controller, ação ]

// Criamos aqui uma rota dinâmica, nomeamos as variaveis que são
// para o Controller (Hello)
Route::get('/hello/{nome}/{sobrenome}', [ Hello::class, 'exibeNome' ]);