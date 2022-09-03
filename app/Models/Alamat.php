<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $guarded = "id";



    public function bio(){
        return $this->hasOne(Biodata::class);
    }
}