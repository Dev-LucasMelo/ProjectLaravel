<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;

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


Route::get('/', [UsuarioController::class, 'index'])->name('index'); //get data (READ)
Route::get('/create', [UsuarioController::class, 'create'])->name('create.view'); //View
Route::Post('/create', [UsuarioController::class, 'store'])->name('store'); //Post form
Route::get('/edit/{id}', [UsuarioController::class, 'edit'])->name('edit.view');
Route::put('/edit/{id}',[UsuarioController::class, 'update'])->name('update.user');
Route::get('delete/{id}',[UsuarioController::class, 'delete'])->name('delete.user');    
