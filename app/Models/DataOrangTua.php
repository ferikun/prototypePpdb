<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alamat;
use App\Models\Biodata;

class DataOrangTua extends Model
{

    protected $fillable = [
        'biodata_id',
        'role',
        'name',
        'birthday',
        'religion',
        'profession',
        'phone'
    ];

    public function alamat(){
        return $this->hasMany(Alamat::class,'reference_id','biodata_id');
    }
    public function bio(){
        return $this->belongsTo(Biodata::class,'biodata_id');
    }
    public function getRoleAtribute(){
        return explode(',', $this->peran)[0];
    }
    public function getRoleAsAtribute(){
        return explode(',', $this->peran)[1];
    }
}
