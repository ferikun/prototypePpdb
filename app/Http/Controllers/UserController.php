<?php

namespace App\Http\Controllers;

use App\Models\AsalSekolah;
use App\Models\Biodata;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function showdata(){
        $data = Biodata::with(['asalsekolah','iduser'])->get();
        return view('admin.siswa',[
            'title' => "Daftar Siswa",
            "siswa" => $data 
        ]);
    }

    public function CreateBio()
    {
        return view('form.biodata');
    }
}

