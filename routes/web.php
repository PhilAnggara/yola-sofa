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
  
Route::post('tambahkan-ke-keranjang', 'MainController@addToCart')
  ->name('add-to-cart');
Route::get('keranjang', 'MainController@cart')
  ->name('cart');
Route::get('checkout', 'MainController@checkout')
  ->name('checkout');
Route::get('sukses', 'MainController@success')
  ->name('success');
Route::get('transaksi', 'MainController@transaction')
  ->name('transaction');
Route::get('transaksi/nomor-transaksi', 'MainController@transactionDetail')
  ->name('transaction-detail');

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