<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Nilai;
use App\Models\PesertaLulus;
use App\Models\PPDB;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function verify($id)
    {
        /*
                Jika ke function ini, status_pembayaran di biodata
            akan di ubah menjadi 1(di anggap sudah melakukan pembayaran),
            dan secara otomatis akan membuat kan table nilai
            untuk siswa tersebut.
        */

        /* 1. Mengupdate status Pembayaran */
        $bio = Biodata::find($id)->update(["status_pembayaran" => '1']);

        /* 2. Dibuatkan Table Nilai */
        Nilai::create([
            "bio_id" => $id,
            "nilai" => '0'
        ]);

        /* 3. Halaman akan di kembalikan dan membawa pesan */
        return redirect('/dashboard/pendaftaran/daftar-siswa')->with('verifikasi','Selamat Data Berhasil di verifikasi!');

    }

    public function ViewInputNilai()
    {

        $ppdb = PPDB::where('status', '1')->first();
        if($ppdb)
        {
            $siswa = Biodata::where('ppdb_id', $ppdb->id)->where('status_pembayaran', '1')->with(['nilai', 'asalsekolah'])->orderBy('name', 'asc')->get();
    
            return view('dashboard.admin.pendaftaran.inputNilai',[
                "title" => "Input Nilai",
                "siswas" => $siswa
            ]);
        }
        else{
            return redirect('/dashboard/not-found');
        }
    }

    public function InputNilai(Request $request)
    {
        /*
            Ketika memanggil fungsi ini, akan dilakukan update data pada Nilai,
            Nilai akan di update berdasarkan inputan
            dan sekaligus jika akan di buatkan table Peserta , untuk menampung siswa yang telah terdaftar
            sekaligur beserta nilainya
        */
        $validate = $request->validate([
            "ppdb_id" => ['required'],
            "id" => ['required'],
            "nilai" =>['required','integer','max:100']
        ]);

        $nilai = Nilai::where('bio_id',$request->id)->first();
        $nilai->update([
            "bio_id" => $request->id,
            "nilai" => $validate['nilai']
        ]);
        if($validate['nilai'] >= 70) //Jika Lulus
        {
            Biodata::where('id',$request->id)->update(["status_kelulusan" => "1"]);
        }
        else{ //jika tidak lulus
            Biodata::where('id',$request->id)->update(["status_kelulusan" => "0"]);
        }

        return redirect('/dashboard/pendaftaran/input-nilai');

    }
}
