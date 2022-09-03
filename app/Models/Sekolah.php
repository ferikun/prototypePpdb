<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;
use App\Models\Alamat;

class Sekolah extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama_sekolah",
        "kode_sekolah",
        "bio",
        "image"
    ];


    public function kontak()
    {
        return $this->hasOne(Kontak::class);
    }

    public function alamat()
    {
        return $this->belongsTo(Alamat::class, 'alamat_id');
    }
}
