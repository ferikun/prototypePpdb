<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $fillable = [
        "sekolah_id",
        "wa_sekolah",
        "wa_admin",
        "wa_bp"
    ];
}
