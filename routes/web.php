<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::redirect('/', '/barang');
Route::resource('barang', BarangController::class);