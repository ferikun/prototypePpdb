<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use App\Models\PPDB;

class RuanganController extends Controller
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
        $ppdb = PPDB::where('status','1')->first();

        if(!$ppdb)
        {
            return redirect('/dashboard/not-found');
        }
        $ruangan = Ruangan::where('ppdb_id',$ppdb->id)->get();
        return view('dashboard.admin.setting.ruangan',[
            "title" => "Tambah Ruangan",
            "ruangans" => $ruangan
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
        $ppdb = PPDB::where('status','1')->first();

        $valiate = $request->validate([
            "nama" => ['required'],
        ]);

        Ruangan::create([
            "ppdb_id" => $ppdb->id,
            "nama_ruangan" => $valiate['nama'],
        ]);

        return redirect('/dashboard/ruangan');
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
        $validate = $request->validate([
            "nama" => ['required'],
        ]);

        $ppdb = PPDB::where('status' ,'1')->first();
        Ruangan::find($id)->update([
            "ppdb_id" => $ppdb->id,
            "nama_ruangan" => $validate['nama']
        ]);

        return redirect('/dashboard/ruangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ruangan::find($id)->delete();

        return redirect('/dashboard/ruangan');
    }
}
