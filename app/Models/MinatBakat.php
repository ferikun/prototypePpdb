<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinatBakat extends Model
{
    protected $fillable = [
        'biodata_id',
        'hobi',
        'bidang_favorit',
        'olahraga',
        'cita_cita'
    ];
    
}
