<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        "akun_id",
        "nisn",
        "gender",
        "placeBorn",
        "birth",
        "agama",
        "statusAnak",
        "statusKeluarga",
        "bidangFav",
        "olahraga",
        "cita"
    ];
}
