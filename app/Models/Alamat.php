<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    public function bio(){
        return $this->hasOne(Biodata::class);
    }
    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class,'kecamatan_id');
    }
    public function kabupaten(){
        return $this->belongsTo(Kabupaten::class,'kabupaten_id');
    }
    public function provinsi(){
        return $this->belongsTo(Provinsi::class,'provinsi_id');
    }
}