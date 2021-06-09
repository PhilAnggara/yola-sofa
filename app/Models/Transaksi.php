<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'transaksi';

    protected $fillable = [
        'id_user',
        'nomor_transaksi',
        'status',
        'total_harga',
        'metode_pembayaran',
        'gambar',
        'nama_penerima',
        'no_telp',
        'kota',
        'kecamatan',
        'detail'
    ];

    protected $hidden = [

    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function transaksiDetail(){
        return $this->hasMany(TransaksiDetail::class, 'id_transaksi', 'id');
    }
}
