<?php

use App\Http\Controllers\SekolahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SekolahController::class, 'index'])->name('index');
Route::get('/create', [SekolahController::class, 'create'])->name('create');
Route::post('/store', [SekolahController::class, 'store'])->name('store');
Route::get('/sekolah/{id}/edit', [SekolahController::class, 'edit'])->name('sekolah.edit'); // Route untuk form edit
Route::put('/sekolah/{id}', [SekolahController::class, 'update'])->name('sekolah.update'); // Route untuk update
Route::delete('/sekolah/{id}', [SekolahController::class, 'destroy'])->name('sekolah.destroy');



