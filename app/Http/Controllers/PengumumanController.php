<?php

namespace App\Http\Controllers;

use App\Models\PostPengumuman;
use App\Models\PPDB;
use Illuminate\Http\Request;

class PengumumanController extends Controller
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
        $ppdbactive = PPDB::where('status',1)->first();

        if(!$ppdbactive)
        {
            return redirect('/dashboard/not-found');
        }
        elseif($ppdbactive)
        {
            $pengumuman = PostPengumuman::where('ppdb_id', $ppdbactive->id)->get();

            return view('dashboard.admin.setting.pengumuman.pengumuman',[
                "title" => "Pengumuman",
                "posts" => $pengumuman,
                "ppdb" => $ppdbactive
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
        $ppdbactive = PPDB::where('status',1)->first();
        return view('dashboard.admin.setting.pengumuman.createpengumuman',[
            "title" => "Membuat Pengumuman Baru",
            "ppdb_id" => $ppdbactive->id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "ppdb_id" => ['required'],
            "kategori" => ['required'],
            "title" => ['required'],
            "konten" => ['required'],
            "author" => ['required']
        ]);

        PostPengumuman::create([
            "ppdb_id" => $validate['ppdb_id'],
            "kategori" => $validate['kategori'],
            "title" => $validate['title'],
            "konten" => $validate['konten'],
            "author" => $validate['author']
        ]);

        return redirect('/dashboard/setting/pengumuman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = PostPengumuman::find($id);
        return view('dashboard.admin.setting.pengumuman.viewpengumuman',[
            "title" => "View Pengumuman",
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppdbactive = PPDB::where('status',1)->first();
        $post = PostPengumuman::find($id);

        return view('dashboard.admin.setting.pengumuman.editpengumuman',[
            "title" => "Edit Pengumuman",
            "post" => $post,
            "ppdb_id" => $ppdbactive->id
        ]);
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
            "ppdb_id" => ['required'],
            "author" => ['required'],
            "title" => ['required'],
            "konten" => ['required']
        ]);

        PostPengumuman::find($id)->update([
            "ppdb_id" => $validate['ppdb_id'],
            "author" => $validate['author'],
            "title" => $validate['title'],
            "konten" => $validate['konten']
        ]);


        return redirect('/dashboard/setting/pengumuman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PostPengumuman::find($id)->delete();

        return redirect('/dashboard/setting/pengumuman');
    }
}
