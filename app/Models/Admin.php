<?php

namespace App\Models;

use App\Http\Controllers\AdminController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guarded = "id";
    protected $fillable = [
        "name","telepon","image"
    ];


    public function TahunAjaran()
    {
        return $this->hasMany(TahunAjaran::class,'admin_id');
    }

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class,'sekolah_id');
    }
}
