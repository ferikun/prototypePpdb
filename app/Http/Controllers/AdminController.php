<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Keuangan;
use Illuminate\Http\Request;
use App\Models\Kontak;

class AdminController extends Controller
{
    public function InputNilai()
    {
        return view('dashboard.admin.inputnilai',[
            "title" => "Input Nilai Siswa",
            "siswas" => Biodata::with('iduser','asalsekolah')->get()
        ]);
    }

    public function TidakLulus()
    {
        return view('dashboard.admin.tidaklulus',[
            "title" => "Daftar Siswa Yang tidak lulu Ujian Masuk"
        ]);
    }

    public function Keuangan()
    {
        return view('dashboard.admin.sekolah.keuangan',[
            "title" => "Keuangan",
            "dataKeuangan" => Keuangan::where('sekolah_id', auth()->user()->sekolah_id)->get()
        ]);
    }

    public function Pengumuman()
    {
        return view('dashboard.admin.sekolah.pengumuman');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashoard.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
