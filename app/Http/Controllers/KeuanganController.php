<?php

namespace App\Http\Controllers;

use App\Models\PPDB;
use App\Models\Keuangan;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class KeuanganController extends Controller
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
        $ppdbActive = PPDB::where('status', 1)->first();
        /*
            Jika Tabel PPDB yang berstatus Berlangsung tidak ada / null
            maka akan di alihkan ke error handler
            tetapi juka tidak null akan di alihkan ke halaman keuangan
        */
        if(!$ppdbActive)
        {
            return redirect('/dashboard/not-found');
        }
        elseif($ppdbActive != null)
        {
            $keuangan = Keuangan::where('ppdb_id', $ppdbActive->id)->get();

            return view('dashboard.admin.setting.keuangan',[
                "title" => "Setting Keuangan",
                "keuangans" => $keuangan,
                "ppdb" => $ppdbActive
            ]);
        }
        
        

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
            "ppdb_id" => ['required'],
            "nama_tagihan" => ['required'],
            "nominal" => ['required','integer']
        ]);

        Keuangan::create($validate);
        return redirect('/dashboard/setting/keuangan');

        
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

            "nama_tagihan" => ['required'],
            "nominal" => ['required']

        ]);
        
        Keuangan::find($id)->update($validate);

        return redirect('/dashboard/setting/keuangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Keuangan::find($id)->delete();

        return redirect('/dashboard/setting/keuangan');
    }
}
