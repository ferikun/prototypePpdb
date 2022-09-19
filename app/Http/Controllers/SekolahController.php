<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Alamat;
use App\Models\Kontak;
use Illuminate\Support\Facades\Storage;

class SekolahController extends Controller
{

    public function  Kontak(Request $request, $id)
    {
        $validate = $request->validate([
            "telepon" => ['required','numeric','digits:12'],
            "whatsapp" => ['required','numeric','digits:12'],
            "WaAdmin" => ['required','numeric','digits:12'],
            "WaBp" => ['required','numeric','digits:12']
        ]);
        Kontak::where('sekolah_id',$id)->update([
            "telepon" => $validate['telepon'],
            "WaSekolah" => $validate['whatsapp'],
            "WaAdmin" => $validate['WaAdmin'],
            "WaBp" => $validate['WaBp']
        ]);

        return redirect('/dashboard/sekolah')->with('kontak','Selamat Data Kontak Berhasil Di Ubah');
    }

    public function ImageSekolah(Request $request, $id)
    {
        // @dd($request);
        $valid = $request->validate([
            'upload' => ['required','image','mimes:jpg,png,jpeg','file','max:1024']
        ]);

        $valid['upload'] = $request->file('upload')->store('profil-sekolah');

        $sekolah = Sekolah::find($id);
        /*
        jika database foto kosong maka skip proses ini
        tetapi jika ada foto sebelumnya maka hapus dulu
        */
        if($sekolah->image){
            Storage::delete($sekolah->image);
        }
        $sekolah->update([
            "nama_sekolah" => $sekolah->nama_sekolah,
            "image" => $valid['upload'],
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
        $sekolah = Sekolah::where('id', auth()->user()->admin->sekolah_id)->with('alamat','kontak')->first();
        return view('dashboard.admin.sekolah.informasi-sekolah',[
            "title" => "Setting Informasi Sekolah",
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
        $validate = $request->validate([
            "nama_sekolah" => ['required','max:30'],
            "alamat" => ['required','max:50'],
            "provinsi" => ['required',],
            "kabupaten" => ['required'],
            "kecamatan" => ['required'],
            "kode_pos" => ['required','']
        ]);
        Sekolah::where('id',$id)->update([
            "nama_sekolah" => $validate['nama_sekolah'],
        ]);
        Alamat::where('refrence_id',$id)->update([
            "alamat" => $validate['alamat'],
            "provinsi" => $validate['provinsi'],
            "kabupaten" => $validate['kabupaten'],
            "kecamatan" => $validate['kecamatan'],
            "kode_pos" => $validate['kode_pos']
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
