<?php

use App\Http\Controllers\LaporanController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// LaporBanjir
Route::get('/lapor', [LaporanController::class, 'form']);
Route::post('/simpan', [LaporanController::class, 'simpan']);
Route::get('/daftar-laporan', [LaporanController::class, 'daftar']);

// Tugas Akhir
Route::get('/produk', function () {
    $produk = Produk::with('kategori')->get();
    return view('produk', ['produk' => $produk]);
});