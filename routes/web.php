<?php

use App\Http\Controllers\GenerarQRController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/codigo', [GenerarQRController::class, 'generateQrCode']);
