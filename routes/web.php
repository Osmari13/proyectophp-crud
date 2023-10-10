<?php

use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', HomeController::class);

Route::get('/', [LibrosController::class, 'index'] )->name('libros.index');

Route::get('libros/create', [LibrosController::class, 'create'])->name('libros.create');

Route::post('/', [LibrosController::class, 'store'])->name('libros.store');

Route::get('libros/{libro}', [LibrosController::class, 'show'])->name('libros.show');

Route::get('libros/{libro}/edit', [LibrosController::class, 'edit'])->name('libros.edit');

Route::put('libros/{libro}', [LibrosController::class, 'update'])->name('libros.update');

Route::delete('libros/{libro}', [LibrosController::class, 'destroy'])->name('libros.destroy');