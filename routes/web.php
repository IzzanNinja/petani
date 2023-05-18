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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('Petani.create');
Route::post('/create', [App\Http\Controllers\HomeController::class, 'store'])->name('Petani.store');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('Petani.edit');
Route::post('/update', [App\Http\Controllers\HomeController::class, 'update'])->name('Petani.update');
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('Petani.delete');
