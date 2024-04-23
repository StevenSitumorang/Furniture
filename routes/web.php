<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Keranjang;
use App\Http\Controllers\Keranjang2;
use App\Http\Controllers\Keranjang3;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Payment;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\Transaksi;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
 //   return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function (){
    return view('welcome');
});

Route::get('/user{id}', function ($id){
    return 'User dengan ID' . $id;
});

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function (){
    });
    Route::get('/users', function (){
        return 'Admin Users';
    });
});

Route::get('/list_barang', [ListBarangController::class, 'tampilkan']);
Route::get('/regist', [RegistController::class, 'Regist']);
Route::get('/login', [LoginController::class, 'Login']);
Route::get('/gambar', [GambarController::class, 'gambar']);


Route::get('/', [ListProductController::class, 'ListProduct']);
Route::get('/tampilkan', [ListProductController::class, 'tampilkan']);
Route::get('/list_product', [ListProductController::class, 'tampilkan']);
Route::get('/keranjang2', [Keranjang2::class, 'keranjang2']);
Route::get('/keranjang', [Keranjang::class, 'keranjang']);
Route::get('/transaksi', [Transaksi::class, 'transaksi']);

