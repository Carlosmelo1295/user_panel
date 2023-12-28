<?php

use App\Http\Controllers\ControllerDelete;
use App\Http\Controllers\GetSingleUserController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UserController;

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



//            URI                    CLASS               METODO
Route::get('painel', [UserController::class, 'getUsers'])->name('painel');

Route::get('getuser/{user}', [GetSingleUserController::class, 'getUser'])->name('getuser');

Route::post('insert', [InsertController::class, 'insert'])->name('insert');

Route::put('update/{user}', [UpdateController::class, 'update'])->name('update');

Route::delete('delete-user/{id}', [ControllerDelete::class, 'delete'])->name('delete-user');


