<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.beranda');
    }
    
    public function listOfProducts()
    {
        return view('pages.products');
    }
    
    public function productDetail()
    {
        return view('pages.detail');
    }
    
    public function cart()
    {
        return view('pages.keranjang');
    }
    
    public function checkout()
    {
        return view('pages.checkout');
    }
    
    public function success()
    {
        return view('pages.sukses');
    }
    
    public function transaction()
    {
        return view('pages.transaksi');
    }
    
    public function transactionDetail()
    {
        return view('pages.detail-transaksi');
    }
}
