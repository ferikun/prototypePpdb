<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    
    protected $fillable = [
        'biodata_id',
        'akta_lahir',
        'kartu_keluarga',
        'pas_photo',
        'ijazah_terakhir',
        'transkrip_nilai'
    ];
}
