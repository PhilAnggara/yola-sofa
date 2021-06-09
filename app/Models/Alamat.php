<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alamat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'alamat';

    protected $fillable = [
        'id_user',
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
}
