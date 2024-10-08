<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KetentuanController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UtamaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/', UtamaController::class);
Route::get('/', [UtamaController::class, 'index'])->name('utama.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/ketentuan', [KetentuanController::class, 'index'])->name('ketentuan.index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');