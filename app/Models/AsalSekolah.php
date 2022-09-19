<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Biodata;

class AsalSekolah extends Model
{
    use HasFactory;

    protected $fillable = [
        'biodata_id',
        'name',
        'sktb' 
    ];
    public function bio(){
        return $this->belongsTo(Biodata::class,'biodata_id');
    }
    public function alamat(){
        return $this->hasOne(Alamat::class,'reference_id','biodata_id','for');
    }
}
