<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AsalSekolah;
use App\Models\Alamat;
use App\Models\User;

class Biodata extends Model
{
    public function asalsekolah(){
        return $this->hasOne(AsalSekolah::class);
    }
    public function iduser(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function alamat(){
        return $this->belongsTo(Alamat::class,'alamat_id');
    }
}
