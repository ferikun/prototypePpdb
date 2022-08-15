<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    protected $fillable = [
        "role",
        "username",
        "fullName",
        "email",
        "password"
    ];


    public function bio(){

        return $this->hasOne(bio::class);
    }
}
