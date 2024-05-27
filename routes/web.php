<?php

use App\Http\Controllers\AccidenteController;
use Illuminate\Support\Facades\Route;


Route::get('/accidentes', [AccidenteController::class, 'index'])->name('accidentes.index');
Route::get('/accidentes/create', [AccidenteController::class, 'create'])->name('accidentes.create');
Route::post('/accidentes', [AccidenteController::class, 'store'])->name('accidentes.store');
Route::get('/accidentes/{accidente}', [AccidenteController::class, 'show'])->name('accidentes.show');
Route::get('/accidentes/{accidente}/edit', [AccidenteController::class, 'edit'])->name('accidentes.edit');
Route::put('/accidentes/{accidente}', [AccidenteController::class, 'update'])->name('accidentes.update');
Route::delete('/accidentes/{accidente}', [AccidenteController::class, 'destroy'])->name('accidentes.destroy');
