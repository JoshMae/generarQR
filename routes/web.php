<?php

use App\Http\Controllers\GenerarQRController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', [GenerarQRController::class, 'showForm']);
Route::post('/generar', [GenerarQRController::class, 'generateQRCodes'])->name('generateQRCodes');