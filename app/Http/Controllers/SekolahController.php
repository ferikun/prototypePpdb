<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Alamat;
use App\Models\Kontak;

class SekolahController extends Controller
{

    public function  Kontak(Request $request, $id)
    {
        Kontak::where('sekolah_id',$id)->update([
            "telepon" => $request->telepon,
            "WaSekolah" => $request->whatsapp,
            "WaAdmin" => $request->WaAdmin,
            "WaBp" => $request->WaBp
        ]);

        return redirect('/dashboard/sekolah')->with('kontak','Selamat Data Kontak Berhasil Di Ubah');
    }

    public function ImageSekolah(Request $request, $id)
    {
        
        $request->upload = $request->file('upload')->store('profil-sekolah');
        $sekolah = Sekolah::find($id);

        $sekolah->update([
            "nama_sekolah" => $sekolah->nama_sekolah,
            "alamat_id" => $sekolah->alamat_id,
            "image" => $request->upload,
        ]);
        return redirect('/dashboard/sekolah');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sekolah = Sekolah::where('id', auth()->user()->sekolah_id)->with('alamat','kontak')->first();
        return view('dashboard.admin.sekolah.informasi-sekolah',[
            "sekolah" => $sekolah
        ]);
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
        Sekolah::where('id',$id)->update([
            "nama_sekolah" => $request->nama_sekolah,
            "alamat_id" => auth()->user()->sekolah->alamat_id,
        ]);
        Alamat::where('id',$id)->update([
            "alamat" => $request->alamat,
            "provinsi" => $request->provinsi,
            "kabupaten" => $request->kabupaten,
            "kecamatan" => $request->kecamatan,
            "kode_pos" => $request->kode_pos
        ]);

        return redirect('/dashboard/sekolah')->with('informasi','Data Berhasil di perbarui');
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
