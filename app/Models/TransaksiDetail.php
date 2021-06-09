<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransaksiDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'transaksi_detail';

    protected $fillable = [
        'id_transaksi',
        'id_produk',
        'warna',
        'jumlah_pesanan',
        'total'
    ];

    protected $hidden = [

    ];
    
    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id');
    }

    public function produk(){
        return $this->hasOne(Produk::class, 'id_produk', 'id');
    }
}
