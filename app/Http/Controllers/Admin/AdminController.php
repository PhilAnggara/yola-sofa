<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        $ready = Produk::where('stok', '!=', 0)->count();
        $pending = Transaksi::where('status', 'pending')->count();
        $terjual = Transaksi::where('status', 'selesai')
                            ->whereMonth('created_at', Carbon::now()->month)
                            ->count();
        $pemasukan = Transaksi::where('status', 'selesai')
                            ->whereMonth('created_at', Carbon::now()->month)
                            ->sum('total_harga');

        return view('pages.admin.dashboard', [
            'ready' => $ready,
            'pending' => $pending,
            'terjual' => $terjual,
            'pemasukan' => $pemasukan
        ]);
    }
}
