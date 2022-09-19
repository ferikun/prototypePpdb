<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsalSekolah extends Model
{
    use HasFactory;

    protected $guarded = "id";

    protected $fillable = [
        "bio_id",
        "nama_asal_sekolah"
    ];
}
