<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;

Route::resource('supplier', SupplierController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('barang', BarangController::class);
Route::resource('customers', CustomerController::class);
Route::resource('keluhan', KeluhanController::class);
Route::resource('kendaraan', KendaraanController::class);
Route::get('/', function () {
    return view('welcome');
});
