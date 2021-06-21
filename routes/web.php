<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index')
  ->name('beranda');
Route::get('produk', 'MainController@listOfProducts')
  ->name('products');
Route::get('produk/{slug}', 'MainController@productDetail')
  ->name('detail');
  
// Tambah ke keranjang
Route::post('tambahkan-ke-keranjang', 'MainController@addToCart')
  ->name('add-to-cart');
// Hapus dari keranjang
Route::get('hapus-dari-keranjang/{id}', 'MainController@removeFromCart')
  ->name('remove-from-cart');

Route::get('keranjang', 'MainController@cart')
  ->name('cart');
Route::get('checkout', 'MainController@checkout')
  ->name('checkout');

// Proses checkout
Route::post('proses/{id}', 'MainController@process')
  ->name('process');

Route::get('sukses', 'MainController@success')
  ->name('success');
Route::get('transaksi', 'MainController@transaction')
  ->name('transaction');
Route::get('transaksi/{no_tran}', 'MainController@transactionDetail')
  ->name('transaction-detail');

// Batalkan pesanan
Route::post('batalkan-pesanan/{id}', 'MainController@cancel')
  ->name('cancel');

Route::prefix('admin')
->namespace('Admin')
->middleware(['auth','only-admin'])
->group(function() {
  
  Route::get('/', 'AdminController@index')->name('admin');
  
  Route::resource('produk', 'ProdukController');
  Route::resource('transaksi', 'TransaksiController');
  Route::resource('gambar', 'GambarController');
  Route::resource('warna', 'WarnaController');

});


Auth::routes();