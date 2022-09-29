<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Auth::routes();


Route::get('/home', function () {
    return view('home');
});
// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');
Route::resource('kategori', 'KategoriController');
Route::resource('produk', 'ProdukController');
// Route::get('/produk/{$id_produk}/edit', 'ProdukController', 'produk.update');
Route::resource('/pembayaran', 'PembayaranController');

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::get('/logout', [LoginController::class, 'logout']);
