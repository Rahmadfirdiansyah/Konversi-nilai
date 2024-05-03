<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KonversiNilaiController;

Route::get('/', function () {
    return view('konversinilai');
});

Route::post('/konversi', [KonversiNilaiController::class, 'konversiNilai']);