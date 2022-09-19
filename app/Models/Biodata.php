<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AsalSekolah;
use App\Models\Alamat;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Nilai;
use App\Models\NoPendaftaran;

class Biodata extends Model
{

    protected $guarded = "id";

    protected $fillable = [
        "name",
        "jurusan_id",
        "ruangan_id",
        "status_pembayaran"
    ];


    public function scopeSearch($query)
    {
        if(request('keywoard'))
        {
            $query->where('name','like','%' . request('keywoard') . '%')
                ->orWhere('nilai','like','%' . request('keywoard') . '%')
                ->orWhere('nama_jurusan','like','%' . request('keywoard') . '%')
                ->orWhere('nama_asal_sekolah','like','%' . request('keywoard') . '%')
                ->orWhere('nomor','like','%' . request('keywoard') . '%');

        }
    }


    public function AsalSekolah(){
        return $this->hasOne(AsalSekolah::class, 'bio_id')->withDefault(['nama_asal_sekolah' => 'Data Tidak Ada']);
    }
    public function iduser(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function alamat(){
        return $this->belongsTo(Alamat::class,'alamat_id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class,'jurusan_id');
    }

    public function nilai()
    {
        return $this->hasOne(Nilai::class,'bio_id');
    }

    public function NoDaftar()
    {
        return $this->hasOne(NoPendaftaran::class,'bio_id');
    }

    public function ppdb()
    {
        return $this->belongsTo(PPDB::class,'ppdb_id');
    }

}
