<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $guarded = "id";

    protected $fillable = [
        "ppdb_id",
        "nama_tagihan",
        "nominal"
    ];

    public function ppdb()
    {
        return $this->belongsTo(PPDB::class,'ppdb_id');
    }
}
