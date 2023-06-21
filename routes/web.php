<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TampilanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('login');

// Route::get('/tampilan1', function () {
//     return view('tampilan1');
// });



Route::post('auth',[UserController::class,'auth']);
Route::get('register',[UserController::class,'register']);
Route::get('register/daftar',[UserController::class,'daftar']);
Route::get('logout',[UserController::class,'logout']);
Route::get('home',[UserController::class,'view']);
Route::get('admin',[UserController::class,'show']);

Route::get('produk',[ProdukController::class,'show']);
Route::get('cart/view/{id}',[TampilanController::class,'cart']);
Route::get('produk/add',[ProdukController::class,'add']);
Route::post('produk/create',[ProdukController::class,'create']);
Route::get('produk/delete/{id}',[ProdukController::class,'delete']);
Route::get('produk/edit/{id}',[ProdukController::class,'edit']);
Route::post('produk/update/{id}',[ProdukController::class,'update']);

Route::get('tampilan',[TampilanController::class,'tampilan']);






