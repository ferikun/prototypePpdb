<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        "bio_id",
        "nilai"
    ];

    public function bio()
    {
        return $this->belongsTo(Biodata::class,'bio_id');
    }
}
