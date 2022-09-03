<?php

namespace App\Http\Controllers;

use App\Models\AsalSekolah;
use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Jurusan;
use App\Models\Nilai;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data
        return view('dashboard.admin.calonsiswa',[
            "title" => "Calon Siswa",
            "siswas" => Biodata::with('asalsekolah','nilai','jurusan','NoDaftar')
                                ->join('nilais','biodatas.id','=','nilais.bio_id')
                                ->join('asal_sekolahs','biodatas.id','=','asal_sekolahs.bio_id')
                                ->join('jurusans','biodatas.jurusan_id', '=' ,'jurusans.id')
                                ->join('no_pendaftarans','biodatas.id', '=', 'no_pendaftarans.bio_id')
                                ->select('biodatas.id','name','nama_asal_sekolah','nilai','nama_jurusan','nomor')
                                ->search()
                                ->orderby('name', 'asc')->get()
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


    // public function ubah($id)
    // {
    //     Nilai::where('bio_id',$id)->update('nilai', request()['nilai']);
    //     Biodata::find($id)->update('name', request('nama'));
    //     AsalSekolah::where('bio_id',$id)->update('nama_asal_sekolah', request('asal_sekolah'));
    //     return redirect('/daftar-siswa');
    // }
}
