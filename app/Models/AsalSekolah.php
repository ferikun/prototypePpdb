<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Biodata;

class AsalSekolah extends Model
{
    use HasFactory;

    public function bio(){
        return $this->belongsTo(Biodata::class,'biodata_id');
    }

}
