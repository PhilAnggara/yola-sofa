<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransaksiRequest;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use Auth;
Use Alert;

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
    
    public function addToCart(TransaksiRequest $request)
    {
        // Tangkap produk berdasarkan id dari request
        $produk = Produk::where('id', $request->id_produk)->firstOrFail();

        $data = $request->all();
        $data['id_user'] = Auth::user()->id;
        $data['nomor_transaksi'] = 'TR'. now()->isoFormat('DDMMYYHHmm').'U' .Auth::user()->id;
        $data['status'] = 'onCart';

        // Cek apakah produk mempunyai harga diskon
        if ($produk->harga_diskon == NULL)
        {
            $data['total'] = $produk->harga * $data['jumlah_pesanan'];
        }
        else
        {
            $data['total'] = $produk->harga_diskon * $data['jumlah_pesanan'];
        }

        $transaksi = Transaksi::where('id_user', Auth::user()->id)
                            ->where('status', 'onCart')->first();
        // Cek apakah user punya pesanan di keranjang
        if ($transaksi == NULL)
        {
            $data['total_harga'] = $data['total'];
            $newTran = Transaksi::create($data);
            $data['id_transaksi'] = $newTran->id;
            TransaksiDetail::create($data);
        }
        else
        {
            $data['total_harga'] = $data['total'] + $transaksi['total_harga'];
            $transaksi->update($data);

            $data['id_transaksi'] = $transaksi->id;
            TransaksiDetail::create($data);
        }

        return redirect()->route('products')->with('toast_success', 'Ditambahkan ke Keranjang!');
    }
    
    public function cart()
    {
        $item = Transaksi::where('id_user', Auth::user()->id)
                        ->where('status', 'onCart')->first();
        return view('pages.keranjang', [
            'item' => $item
        ]);
    }
    
    public function checkout()
    {
        $item = Transaksi::where('id_user', Auth::user()->id)
                        ->where('status', 'onCart')->first();

        return view('pages.checkout', [
            'item' => $item
        ]);
    }
    
    public function success()
    {
        return view('pages.sukses');
    }
    
    public function transaction()
    {
        $items = Transaksi::where('id_user', Auth::user()->id)
                        ->where('status', '!=', 'onCart')->get();

        return view('pages.transaksi', [
            'items' => $items
        ]);
    }
    
    public function transactionDetail()
    {
        $items = Transaksi::where('id_user', Auth::user()->id)
                        ->where('status', '!=', 'onCart')->get();

        return view('pages.detail-transaksi', [
            'items' => $items
        ]);
    }
}
