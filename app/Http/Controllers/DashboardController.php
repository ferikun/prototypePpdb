<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\PPDB;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        
        if(auth()->user()->role == 'admin')
        {
            $ppdb = PPDB::where('status', '1')->first();
            if($ppdb)
            {
                $siswa = Biodata::where('ppdb_id',$ppdb->id);
                $jumlah = $siswa->get();
                $total = $siswa->count();
                $limabesar = $siswa->with('asalsekolah')
                ->join('nilais', 'biodatas.id' ,'=', 'nilais.bio_id')
                ->join('asal_sekolahs', 'biodatas.id' ,'=', 'asal_sekolahs.bio_id')->orderBy('nilai','desc')->limit(5)->get();
    
    
                return view('dashboard.admin.index',[
                    "title" => "Dashboard Admin",
                    "siswas" => $jumlah,
                    "limabesars" =>  $limabesar,
                    "total" => $total
    
                ]);
            }
            else{
                return redirect('/dashboard/not-found');
            }

        }

        return view('dashboard.user.index');
    }

    public function profil()
    {
        return view('dashboard.profil');
    }
/*
|----------------------------------------------|
|Ini Halaman Dashboard Admin                   |
|----------------------------------------------|
*/
    public function siswaVerifikasi()
    {
        $ppdb = PPDB::where('status', '1')->first();
        if($ppdb)
        {
            $siswa = Biodata::where([
                'ppdb_id' => $ppdb->id,
                'status_pembayaran' => '1'
            ])->with('AsalSekolah')->orderBy('name','ASC')->get();

            return view('dashboard.admin.pendaftaran.siswa-verifikasi',[
                "title" => "Daftar Siswa Verifikasi",
                "siswas" => $siswa
            ]);
        }
        else{
            return redirect('/dashboard/not-found');
        }

    }

    public function hasilAkhir()
    {
        $ppdb = PPDB::where('status', '1')->first();

        if($ppdb)
        {
            $daftar = Biodata::where(['ppdb_id' => $ppdb->id, 'status_pembayaran' => '1'])->with(['nilai','asalsekolah'])->orderBy('name','ASC')->get();

            return view('dashboard.admin.pendaftaran.hasil-akhir',[
                "title" => "Hasil Akhir",
                "daftars" => $daftar
            ]); 
        }
        else{
            return redirect('/dashboard/not-found');
        }
    }
}
