<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use App\Models\Keuangan;
use App\Models\PostPengumuman;
use App\Models\PPDB;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PpdbController extends Controller
{
    //

    public function index()
    {
        $ppdb = PPDB::with('TahunAjaran','gelombang')->orderBy('tahunAjaran_id','desc')->get();
        return view('dashboard.admin.setting.ppdb.setting-ppdb',[
            "title" => "Setting PPDB",
            "ppdbs" => $ppdb
        ]);
    }

    public function create()
    {
        $tahunajaran = TahunAjaran::where('admin_id',auth()->user()->admin->id)->get();

        return view('dashboard.admin.setting.ppdb.tambah-ppdb',[
            "title" => "Tambah PPDB",
            "tahun_ajaran" => $tahunajaran,

        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "tahun_ajaran" => ['required'],
            "gelombang" => ['required'],
            "kuota_peserta" => ['required','numeric'],
            "tes" => ['required'],
            "nama_tagihan" => ['required'],
            "nominal" => ['required','numeric'],
            "tgl_mulai" => ['required'],
            "tgl_selesai" => ['required'],
            "tgl_ujian" => ['required'],
            "waktu_ujian" => ['required','integer'],
            "baner" => ['required'],
        ]);

        $validate['baner'] = $request->file('baner')->store('ppdb-baner');

        PPDB::create([
            "tahunAjaran_id" => $validate['tahun_ajaran'],
            "tgl_mulai" => $validate['tgl_mulai'],
            "tgl_selesai" => $validate['tgl_selesai'],
            "gelombang_id" => $validate['gelombang'],
            "kuota" => $validate['kuota_peserta'],
            "tes" => $validate['tes'],
            "tgl_ujian" => $validate['tgl_ujian'],
            "waktu_ujian" => $validate['waktu_ujian'],
            "status" => '0',
            "image" => $validate['baner'],
        ]);

        $ppdbbaru = PPDB::orderBy('id','DESC')->first();

        Keuangan::create([
            "ppdb_id" => $ppdbbaru->id,
            "nama_tagihan" => $validate['nama_tagihan'],
            "nominal" => $validate['nominal']
        ]);


        return redirect('/dashboard/setting/ppdb');
    }

    public function edit($id)
    {   $tahunajaran = TahunAjaran::where('admin_id',auth()->user()->admin->id)->get();
        $gelombang = Gelombang::get();
        $ppdb = PPDB::where('id',$id)->with('TahunAjaran','gelombang')->first();
        return view('dashboard.admin.setting.ppdb.editppdb',[
            "title" => "Edit PPDB",
            "ppdb" => $ppdb,
            "tahun_ajaran" => $tahunajaran,
            "gelombangs" => $gelombang,
        ]);
    }

    public function update(Request $request, $id, $tahunId)
    {
        $validate = $request->validate([

            "gelombang" => ['required'],
            "kuota_peserta" => ['required','numeric'],
            "tes" => ['required'],
            "tgl_mulai" => ['required'],
            "tgl_selesai" => ['required'],
            "tgl_ujian" => ['required'],
            "waktu_ujian" => ['required','integer'],
            "baner" => ['required'],
        ]);
        $validate['baner'] = $request->file('baner')->store('ppdb-baner');

        $ppdb = PPDB::find($id);

        if($ppdb->image)
        {
            Storage::delete($ppdb->image);
        }

        $ppdb->update([
            "tahunAjaran_id" => $tahunId,
            "tgl_mulai" => $validate['tgl_mulai'],
            "tgl_selesai" => $validate['tgl_selesai'],
            "gelombang_id" => $validate['gelombang'],
            "kuota" => $validate['kuota_peserta'],
            "tes" => $validate['tes'],
            "tgl_ujian" => $validate['tgl_ujian'],
            "waktu_ujian" => $validate['waktu_ujian'],
            "image" => $validate['baner'],
        ]);

        return redirect('/dashboard/setting/ppdb');
    }

    public function delete($id)
    {
        Keuangan::where('ppdb_id',$id)->delete();
        PostPengumuman::where('ppdb_id',$id)->delete();

        PPDB::find($id)->delete();


        return redirect('/dashboard/setting/ppdb')->with('hapus','PPDB Berhasil DI Hapus');
    }

    public function active($id)
    {

        /*
        pertama status ppdb yang sedang berlangsung di alihkan ke Selesai
        */
       PPDB::where('status', 1)->update([
        "status" => '0'
       ]);

       /*
       kemudian untuk ppdb yang sesuai id akan di Aktivkan kembali/ status ppdb di ubah menjadi Berlangsng
       */
        PPDB::find($id)->update([
            "status" => '1'
        ]);

        return redirect('/dashboard/setting/ppdb');
    }

    public function notactive($id)
    {
        PPDB::find($id)->update([
            "status" => '0'
        ]);

        return redirect('/dashboard/setting/ppdb');
    }
}
