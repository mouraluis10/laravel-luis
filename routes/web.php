<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Inicio::class, 'inicio'])->name('inicio');

Route::get('/adocao', [App\Http\Controllers\adocao::class, 'adocao'])->name('adocao');

Route::get('/detalhes-animal', [App\Http\Controllers\DetalhesAnimal::class, 'DetalhesAnimal'])->name('DetalhesAnimal');

Route::get('/ListarAnimais', [App\Http\Controllers\ListarAnimais::class, 'ListarAnimais'])->name('ListarAnimais');

Route::get('/login', [App\Http\Controllers\login::class, 'login'])->name('login');

Route::get('/registro', [App\Http\Controllers\registro::class, 'registro'])->name('registro');

