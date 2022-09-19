<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAjaran;

class TahunController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tahun = TahunAjaran::where('admin_id',auth()->user()->admin->id)->get();
        return view('dashboard.admin.setting.tahun-ajaran',[
            "title" => "Edit Tahun Ajaran",
            "tahuns" => $tahun
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
        $validate = $request->validate([
            'admin_id' => ['required'],
            "tahun" => ['required','unique:tahun_ajarans,tahun','string','size:9'],
        ]);

        TahunAjaran::create([
            "admin_id" => $validate['admin_id'],
            "tahun" => $validate['tahun']
        ]);

        return redirect('/dashboard/tahun-ajaran')->with('berhasil','Data Berhasil di Tambahkan');


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
            'admin_id' => ['required'],
            "tahun" => ['required','unique:tahun_ajarans,tahun','string','size:9'],
        ]);

        TahunAjaran::find($id)->update($validate);

        return redirect('/dashboard/tahun-ajaran')->with('berhasil','Data Berhasil di Ubah');

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
        TahunAjaran::find($id)->delete();
        
        return redirect('/dashboard/tahun-ajaran')->with('berhasil','Data Berhasil di Hapus');
    }
}
