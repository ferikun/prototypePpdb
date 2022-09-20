<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{

    public function verified()
    {
        return view('dashboard.admin.pendaftaran.verify');
    }

    public function hasilakhir()
    {
        return view('dashboard.admin.pendaftaran.hasil-akhir');
    }

    public function daftarcalonsiswa()
    {
        return view('dashboard.admin.pendaftaran.calon-siswa');
    }
}
