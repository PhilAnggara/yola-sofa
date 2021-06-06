<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gambar extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'gambar';

    protected $fillable = [
        'id_produk',
        'gambar'
    ];

    protected $hidden = [

    ];

    public function produk(){
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }
}
