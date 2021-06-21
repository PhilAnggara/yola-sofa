<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransaksiRequest;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use App\Models\Alamat;
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

        // Cek apakah produk tidak mempunyai harga diskon
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

        $product_name = $produk->nama_produk;
        return redirect()->route('products')->with('toast_success', '<b>'. $product_name.'</b>'. ' Ditambahkan ke Keranjang!');
    }
    
    public function cart()
    {
        $item = Transaksi::where('id_user', Auth::user()->id)
                        ->where('status', 'onCart')->first();
        $product = Produk::all();
        
        return view('pages.keranjang', [
            'item' => $item,
            'product' => $product
        ]);
    }
    
    public function removeFromCart($id)
    {
        $item = TransaksiDetail::find($id);
        $item->delete();

        $transaksi = Transaksi::find($item->id_transaksi);

        // Cek apakah transaksi masih memiliki transaksi detail
        if ($transaksi->transaksiDetail->count() == NULL)
        {
            $transaksi->delete();
        }
        else
        {
            $transaksi->total_harga = $transaksi->transaksiDetail->sum('total');
            $transaksi->total_harga += $transaksi->ongkir;
            $transaksi->save();
        }

        $nama_barang = $item->produk->nama_produk;
        return redirect()->back()->with('toast_success', '<b>'. $nama_barang.'</b>'. ' Dihapus dari Keranjang!');
    }
    
    public function checkout()
    {
        $item = Transaksi::where('id_user', Auth::user()->id)
                        ->where('status', 'onCart')->first();
        $product = Produk::all();
        $alamat = Alamat::where('id_user', auth()->user()->id)->first();

        return view('pages.checkout', [
            'item' => $item,
            'product' => $product,
            'alamat' => $alamat
        ]);
    }

    public function process(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $alamat = Alamat::where('id_user', auth()->user()->id)->first();

        $data = $request->all();
        $data['id_user'] = auth()->user()->id;
        $data['status'] = 'Pending';
        $data['ongkir'] = 100000;
        $data['total_harga'] = $transaksi->transaksiDetail->sum('total') + $data['ongkir'];
        $data['metode_pembayaran'] = $data['metode_pembayaran'];
        $data['gambar'] = $request->file('gambar')->store(
            'bukti-transfer/'.$transaksi->nomor_transaksi, 'public'
        );

        if ($alamat){
            $alamat->update($data);
        } else {
            Alamat::create($data);
        }

        $transaksi->update($data);

        return redirect()->route('success');
    }
    
    public function success()
    {
        return view('pages.sukses');
    }
    
    public function transaction()
    {
        $items = Transaksi::where('id_user', Auth::user()->id)
                        ->where('status', '!=', 'onCart')->get();
        $product = Produk::all();

        return view('pages.transaksi', [
            'items' => $items,
            'product' => $product
        ]);
    }
    
    public function transactionDetail($no_tran)
    {
        $item = Transaksi::where('id_user', Auth::user()->id)
                        ->where('nomor_transaksi', $no_tran)->first();
        $details = TransaksiDetail::where('id_transaksi', $item->id)->get();
        $products = Produk::all();

        return view('pages.detail-transaksi', [
            'item' => $item,
            'products' => $products,
            'details' => $details,
        ]);
    }

    public function cancel(Request $request, $id)
    {
        $transaksi = transaksi::findOrFail($id);
        $transaksi->status = 'Dibatalkan';

        $transaksi->save();

        return redirect()->back();
    }
}
