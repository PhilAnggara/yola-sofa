<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'slug',
        'harga',
        'harga_diskon',
        'stok',
        'material_kaki',
        'material_dudukan',
        'busa',
        'rangka',
        'keseluruhan',
        'kedalaman_dudukan',
        'ketebalan_dudukan',
        'beranda'
    ];

    protected $hidden = [

    ];

    public function gambar(){
        return $this->hasMany(Gambar::class, 'id_produk', 'id');
    }

    public function warna(){
        return $this->hasMany(Warna::class, 'id_produk', 'id');
    }
}
