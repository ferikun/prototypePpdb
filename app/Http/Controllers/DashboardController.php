<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        return view('dashboard.index');
    }

    public function profil()
    {
        return view('dashboard.profil');
    }

    public function pengumuman()
    {
        return view('dashboard.pengumuman');
    }

    public function pembayaran()
    {
        return view('dashboard.pembayaran');
    }

    public function dokumen()
    {
        return view('dashboard.dokumen');
    }
}
