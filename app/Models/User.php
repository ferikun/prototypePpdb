<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Biodata;
use App\Models\Keuangan;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role',
        'username',
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'sekolah_id',
        'kodeMasuk',
        'bio_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function bio(){
        return $this->hasOne(Biodata::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class,'admin_id');
    }

    //admin
    public function keuangan()
    {
        return $this->hasOne(Keuangan::class);
    }

    public function jurusan()
    {
        return $this->hasOne(Jurusan::class,'admin_id');
    }
}
