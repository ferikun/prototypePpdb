<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliLain extends Model
{
    protected $fillable = [
    'biodata_id',
    'nik',
    'name',
    'birthplace',
    'birthday',
    'religion',
    'profession',
    'role',
    'phone'
    ];
    public function alamat(){
        return $this->hasOne(Alamat::class,'reference_id','biodata_id');
    }
}
