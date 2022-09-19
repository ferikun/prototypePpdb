<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
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
    $jurusan = Jurusan::where('admin_id',auth()->user()->admin->id)->get();
        //
        return view('dashboard.admin.setting.jurusan',[
            "title" => "Edit Jurusan",
            "jurusans" => $jurusan
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
            "admin_id" => ['required'],
            "nama_jurusan" => ['required','string','unique:jurusans,nama_jurusan'],
        ]);

        Jurusan::create($validate);

        return redirect('/dashboard/jurusan')->with('berhasil','Data Berhasil di tambahkan');
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
            "admin_id" => ['required'],
            "nama_jurusan" => ['required','unique:jurusans,nama_jurusan']
        ]);

        Jurusan::find($id)->update($validate);

       return redirect('/dashboard/jurusan')->with('berhasil','Data berhasil di Ubah');
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
        Jurusan::find($id)->delete();

        return redirect('/dashboard/jurusan')->with('berhasil','Data Berhasil di Hapus');
    }
}
