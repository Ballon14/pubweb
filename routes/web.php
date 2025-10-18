<?php

use App\Http\Controllers\PersonsController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\AnalisaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list-tugas', function () {
    return view('list_tugas');
});

Route::get('/videos', [VideosController::class, 'index'],);

Route::get('/biodata', [PersonsController::class, 'person']);

Route::get('/analisis', [AnalisaController::class, 'tampilkanHasil']);
