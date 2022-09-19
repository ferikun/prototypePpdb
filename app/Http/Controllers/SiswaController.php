<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\AsalSekolah;
use App\Models\Biodata;
use App\Models\Dokumen;
use App\Models\Nilai;
use App\Models\OrangTua;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function show($id)
    {
        $siswa = Biodata::with('alamat','asalsekolah')->find($id);
        $ayah = OrangTua::where([
            'bio_id' => $id,
            "role" => 'ayah'
        ])->first();
        $ibu = OrangTua::where([
            'bio_id' => $id,
            "role" => 'ibu'
        ])->first();

        return view('dashboard.admin.pendaftaran.DataSiswa.profil-siswa',[
            "title" => "Profil Siswa",
            "siswa" => $siswa,
            "ayah" => $ayah,
            "ibu" => $ibu
        ]);
    }

    public function hapus($id,)
    {
        /* Temukan Biodata */
        $biodata = Biodata::find($id);
        /* Hapus Alamat Siswa terlebih dahulu */
        Alamat::where([
            "refrence_id" => $id,
            "for" => "siswa"
        ])->delete();

        /* Hapus Data Asal Sekolah */
        AsalSekolah::where('bio_id',$id)->delete();

        /* Hapus Data Dokumen siswa */
        Dokumen::where('bio_id',$id)->delete();

        /* Hapus data Nilai Siswa */
        Nilai::where('bio_id',$id)->delete();

        /* Hapus Data orang tua Siswa */
        OrangTua::where('bio_id',$id)->delete();

        /* Hapus Data User */
        User::find($biodata->user_id)->delete();

        /* Hapus Data Biodata Siswa */
        $biodata->delete();

        /* Return ke halaman pendaftar */
        return redirect('/dashboard/pendaftaran/daftar-siswa')->with('berhasil','Data Berhasil di Hapus');
    }
}
