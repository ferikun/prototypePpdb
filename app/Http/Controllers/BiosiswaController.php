<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Models\User;

class BiosiswaController extends Controller
{
    public function showbiosiswa(Biodata $bio){
        
        return view('admin.biosiswa',[
            'title' => 'Biodata',
            'siswa' => $bio
        ]   
        );
    }
    public function showbiodata(Biodata $bio){

        return view('user.bio',[
            'title' => 'Biodata',
            'siswa' => $bio
        ]);
    }
}
