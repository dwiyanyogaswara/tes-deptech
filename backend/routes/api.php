<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::group(['prefix' => 'user'], function(){
//     Route::get('/get-user-all',  [App\Http\Controllers\UserController::class, 'getUserAll']);
//     Route::post('/get-user',  [App\Http\Controllers\UserController::class, 'getUser']);
//     Route::post('/save-user',  [App\Http\Controllers\UserController::class, 'saveUser']);
//     Route::post('/update-user',  [App\Http\Controllers\UserController::class, 'updateUser']);
// });

// Route::group(['prefix' => 'kategoriproduk'], function(){
//     Route::get('/get-kategori-produk-all',  [App\Http\Controllers\ProductController::class, 'getKategoriProdukAll']);
//     Route::post('/save-kategori-produk',  [App\Http\Controllers\ProductController::class, 'saveKategoriProduk']);
//     Route::post('/update-kategori-produk',  [App\Http\Controllers\ProductController::class, 'updateKategoriProduk']);
// });

Route::group(['prefix' => 'produk'], function(){
    Route::get('/get-produk-all',  [App\Http\Controllers\ProdukController::class, 'getProdukAll']);
    Route::get('/get-produk',  [App\Http\Controllers\ProdukController::class, 'getProduk']);
    Route::post('/save-produk',  [App\Http\Controllers\ProdukController::class, 'saveProduk']);
    Route::post('/update-produk',  [App\Http\Controllers\ProdukController::class, 'updateProduk']);
    Route::delete('/delete-produk',  [App\Http\Controllers\ProdukController::class, 'deleteProduk']);

});




Route::get('/halo', function () {
    return 'Hello World';
});
?>