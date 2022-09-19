<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Biodata;
use App\Models\MinatBakat;

class BiodataController extends Controller
{
    public function formbio(){
        return view('dashboard.createbio');
    }

    
    public function createBio(Request $request){
        
        $user = User::find(auth()->user()->id);
        $validatedDataBio = $request->validate([
                    'user_id' => '',
                    'nisn' => 'required|max:10|min:10',
                    'name' => 'required',
                    'nickname' => 'required',
                    'gender' => 'required',
                    'birthplace' => 'required',
                    'birthday' => 'required',
                    'religion' => 'required',
                    'anak_ke' => 'required',
                    'status_keluarga' => 'required',
                    'jurusan' => 'required',
                    'ppdb_id' => 'required'    
                ]);
        $user->bio()->create($validatedDataBio);
        $validatedDataBio['user_id'] = auth()->user()->id;
        $validatedAlamat = $request->validate([
                    'alamat' => 'required',
                    'for' => 'required',
                    'provinsi' => 'required',
                    'kabupaten' => 'required',
                    'kecamatan' => 'required',
                    'kodepos' => 'required',
                ]);
        
        $bio = Biodata::find(auth()->user()->bio->id);
        $bio->alamat()->create($validatedAlamat);
        $bio->minat()->create([
            'biodata_id' => auth()->user()->bio->id,
            'hobi' => $request->hobi,
            'bidang_favorit' => $request->bidang_favorit,
            'olahraga' => $request->olahraga,
            'cita_cita' => $request->cita_cita,
        ]);
        $bio->dokumen()->create([
            'biodata_id' => auth()->user()->bio->id,
            'akta_kelahiran'  => $request->akta_kelahiran,
            'kartu_keluarga'  => $request->kartu_keluarga,
            'pas_photo'       => $request->pas_photo,
            'ijazah_terakhir' => $request->ijazah_terakhir,
            'transkrip_nilai' => $request->transkrip_nilai
        ]);
        
        return redirect('/dashboard/createasek');
    }

    public function profilBio()
    {
        $address = Alamat::where('reference_id',auth()->user()->bio->id)
                         ->where('for','biodata')
                         ->first();
        return view('dashboard.profil_siswa',[
            "title" => "bio", 
            "biodata" => Biodata::where('id',auth()->user()->bio->id)->first(),
            "address" => $address,
            "minat" => MinatBakat::where('biodata_id',auth()->user()->bio->id)->first()
        ]);
    }

    public function updateBio(Request $request)
    {
        $validatedDataBio = $request->validate([
            'user_id' => '',
            'nisn' => 'required|max:10|min:10',
            'name' => 'required',
            'nickname' => 'required',
            'gender' => 'required',
            'birthplace' => 'required',
            'birthday' => 'required',
            'religion' => 'required',
            'anak_ke' => 'required',
            'status_keluarga' => 'required',
            'jurusan' => 'required',
            'ppdb_id' => 'required' 
            
        ]);
        $validatedDataBio['user_id'] = auth()->user()->id;
        $validatedAlamat = $request->validate   ([
                'alamat' => 'required',
                'for' => 'required',
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'kecamatan' => 'required',
                'kodepos' => 'required',
        ]);
        Biodata::where('id',auth()->user()->bio->id)
                ->update($validatedDataBio);
        
        Alamat::where('reference_id',auth()->user()->bio->id)
                ->where('for','biodata')        
                ->update($validatedAlamat);
        return back()->with('berhasil','Data Diri Berhasil Diubah');
    }
    public function updateMinat(Request $request){
        $minat = [
            'hobi' => $request->hobi,
            'bidang_favorit' => $request->bidang_favorit,
            'olahraga' => $request->olahraga,
            'cita_cita' => $request->cita_cita,
        ];
        MinatBakat::where('biodata_id',auth()->user()->bio->id)
                    ->update($minat);
        return back()->with('minatberhasil','Selamat Minat dan Bakat Berhasil Diubah.');
    }
}
