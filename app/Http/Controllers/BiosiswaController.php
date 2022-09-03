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

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            "nisn" => "required",
            "name" => "required",
            "nickname" => "required",
            "gender" => "required",
            "tempat_lahir" => "required",
            "tanggal_lahir" =>"required",
            "agama" => "required",
            "anak_ke" => "required",
            "status_keluarga" => "required",
            "alamat" => "required",
            "provinsi" => "required",
            "kabupaten" => "required",
            "kecamatan" => "required",
            "kode_pos" => "required"
        ]);

        $alamat = $validatedData([
            "alamat",
            "provinsi",
            "kabupaten",
            "kecamatan",
            "kode_pos"
        ]);

        $bio = $validatedData([
            "nisn" => "required",
            "name" => "required",
            "nickname" => "required",
            "gender" => "required",
            "tempat_lahir" => "required",
            "tanggal_lahir" =>"required",
            "agama" => "required",
            "anak_ke" => "required",
            "status_keluarga" => "required"
        ]);




    }

}
