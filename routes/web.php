<?php

use App\Http\Controllers\PersonsController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\AnalisaController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-tugas', [App\Http\Controllers\ListTugasController::class, 'index'])->name('list-tugas.index');

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'showByNim'])->name('mahasiswa.show');

Route::get('/videos', [VideosController::class, 'index'],);

Route::get('/biodata', [PersonsController::class, 'person']);

Route::get('/analisis', [AnalisaController::class, 'tampilkanHasil']);
