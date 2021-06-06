<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warna extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'warna';

    protected $fillable = [
        'id_produk',
        'nama_warna',
        'kode_warna'
    ];

    protected $hidden = [

    ];

    public function produk(){
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }
}
