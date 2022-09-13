<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;

Route::get('/', function () {
    return view('site.index');
})->name('site.index');

Route::get('/lista', [MarcaController::class, 'lista'])->name('site.lista');

//Rotas para adicionar marcas ao Bd
Route::get('/addMarca', [HomeController::class, 'addMarcaView'])->name('site.addMarcaView');
Route::post('/addMarca', [MarcaController::class, 'store'])->name('site.addMarca');

//Rotas para editar e excluir dados
Route::get('/editar/{id}', [MarcaController::class, 'edit'])->name('site.editar');
Route::put('/editar/{id?}', [MarcaController::class, 'update'])->name('site.update');
Route::get('/remover/{id}', [MarcaController::class, 'destroy'])->name('site.remover');

//Rotas para adicionar Modelos de carros as Marcas
Route::get('/addModelo', [ModeloController::class, 'addModelo'])->name('site.addModeloView');
Route::post('/addModelo', [ModeloController::class, 'insert'])->name('site.addModelo');


