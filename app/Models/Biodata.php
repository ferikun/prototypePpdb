<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AsalSekolah;
use App\Models\Alamat;
use App\Models\User;

class Biodata extends Model 
{

    protected $fillable = [  
        'user_id',
        'nisn',
        'name',
        'nickname',
        'gender',
        'birthplace',
        'birthday',
        'religion',
        'anak_ke',
        'status_keluarga',
        'jurusan',
        'ruangan_id',
        'ppdb_id',
        'status_pembayaran'
    ];
    public function asalsekolah(){
        return $this->hasOne(AsalSekolah::class);
    }
    public function userid(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function minat(){
        return $this->hasOne(MinatBakat::class);
    }

    public function alamat(){
        return $this->hasOne(Alamat::class,'reference_id');
    }

    public function orangtua(){
        return $this->hasMany(DataOrangTua::class);
    }
    public function walilain(){
        return $this->hasOne(WaliLain::class);
    }  
    public function dokumen(){
        return $this->hasOne(Dokumen::class);
    }
}
