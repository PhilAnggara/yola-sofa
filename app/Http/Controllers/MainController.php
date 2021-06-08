<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class MainController extends Controller
{
    public function index()
    {
        $items = Produk::where('beranda', 1)->limit(4)->get();
        return view('pages.beranda', compact('items'));
    }
    
    public function listOfProducts()
    {
        $items = Produk::all()->sortByDesc('stok');
        return view('pages.products', compact('items'));
    }
    
    public function productDetail(Request $request, $slug)
    {
        $item = Produk::where('slug', $slug)->firstOrFail();
        return view('pages.detail', [
            'item' => $item
        ]);
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
