<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/cadastrar', function () {
    return view('register');
})->middleware(['auth', 'verified'])->name('cadastrar');

Route::get('/listar', [ClienteController::class, 'listar'])->middleware(['auth', 'verified'])->name('listar');

// CRUD
Route::post('/store', [ClienteController::class, 'store']);

Route::get('/excluir/{id}', [ClienteController::class, 'excluir']);

Route::get('/editar/{id}', [ClienteController::class, 'edit']);

Route::put('/atualizar/{id}', [ClienteController::class, 'update']);

Route::delete('/delete/{id}', [ClienteController::class, 'destroy']);

//rotas do breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
