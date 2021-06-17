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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\UtamaController::class, 'index'])->name('welcome');
Route::get('/infopemesanan', [App\Http\Controllers\UtamaController::class, 'infopemesanan'])->name('infopemesanan');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/viewbarang', [App\Http\Controllers\BarangController::class, 'index'])->name('viewbarang');
Route::get('/inputbarang', [App\Http\Controllers\BarangController::class, 'create'])->name('inputbarang');
Route::post('/inputbarang/store', [App\Http\Controllers\BarangController::class, 'store'])->name('storebarang');
Route::get('/editbarang/edit/{id}', [App\Http\Controllers\BarangController::class, 'edit'])->name('editbarang');
Route::put('/editbarang/update/{id}', [App\Http\Controllers\BarangController::class, 'update'])->name('updatebarang');
Route::get('/deletebarang/destroy/{id}', [App\Http\Controllers\BarangController::class, 'destroy'])->name('destroybarang');
