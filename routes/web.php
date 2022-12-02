<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PersonaController;

Route::redirect('/', '/categorias');

Route::resource('categorias', CategoriaController::class);
// Si solo quiero algunos:    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

Route::resource('personas', PersonaController::class);

// Route::patch('/persona/{persona}', PersonaController::class, 'estrellaOnOff');

Route::fallback(function () {
    return view('404');
});
