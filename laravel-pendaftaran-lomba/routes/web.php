<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', [PendaftaranController::class, 'showForm']);
Route::post('/konfirmasi', [PendaftaranController::class, 'prosesForm']);