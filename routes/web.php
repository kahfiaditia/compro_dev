<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\UtamaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/', UtamaController::class);
Route::get('/', [UtamaController::class, 'index'])->name('utama.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
