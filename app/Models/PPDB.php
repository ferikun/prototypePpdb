<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    use HasFactory;

    protected $fillable = [
        "tahunAjaran_id",
        "tgl_mulai",
        "tgl_selesai",
        "gelombang_id",
        "kuota",
        "tes",
        "tgl_ujian",
        "waktu_ujian",
        "status",
        "image"
    ];

    public function TahunAjaran()
    {
        return $this->belongsTo(TahunAjaran::class,'tahunAjaran_id');
    }

    public function gelombang()
    {
        return $this->belongsTo(Gelombang::class,'gelombang_id');
    }

    public function keuangan()
    {
        return $this->hasMany(Keuangan::class,'ppdb_id');
    }
}
