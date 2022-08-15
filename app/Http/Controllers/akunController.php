<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;
use App\Models\Bio;

class akunController extends Controller
{
    //

    public function daftarSiswa()
    {
        return view('siswa', [
            "title" => "daftar siswa",
            "siswa" => Akun::with('bio')->get()
        ]);
    }

    public function bioUser(Bio $bio)
    {
        return view('bio',[
            "title" => "Bio User",
            "bioUser" => $bio->load('')
        ]);
    }
}
