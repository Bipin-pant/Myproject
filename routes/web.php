<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/govinda', [\App\Http\Controllers\BipinController::class, 'index'])->name('govinda.index');
     Route::get('/govinda/add', [\App\Http\Controllers\BipinController::class, 'add'])->name('govinda.add');
     Route::post('/govinda/store', [\App\Http\Controllers\BipinController::class, 'store'])->name('govinda.store');
     Route::get('/govinda/edit/{id}', [\App\Http\Controllers\BipinController::class, 'edit'])->name('govinda.edit');
     Route::post('/govinda/update/{id}', [\App\Http\Controllers\BipinController::class, 'update'])->name('govinda.update');
     Route::get('/delete-govinda/{id}', [\App\Http\Controllers\BipinController::class, 'destroy'])->name('govinda.destroy');
