<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $fillable =  [
        'reference_id',
        'for',
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kodepos'
    ];

    public function bio(){
        return $this->belongsTo(Biodata::class,'biodata_id','reference_id');
    }
    public function orangtua(){
        return $this->belongsTo(DataOrangTua::class,'data_orang_tua_id','reference_id');
    }
    public function asalsekolah(){
        return $this->belongsTo(AsalSekolah::class,'asal_sekolah_id','reference_id');
    }
}