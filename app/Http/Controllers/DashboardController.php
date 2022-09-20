<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\AsalSekolah;
use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\DataOrangTua;
use App\Models\Dokumen;
use App\Models\user;
use App\Models\WaliLain;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;


class DashboardController extends Controller
{
    //


    public function index()
    {
        $role = auth()->user()->role;
        if( $role == 'siswa')
        {
            return view('dashboard.user.index');
        }
        elseif( $role == 'admin')
        {
            return view('dashboard.admin.index');
        }
    }
    public function pengumuman()
    {
        return view('dashboard.user.pengumuman.pengumuman');
    }

    public function bayar_pendaftaran()
    {
        return view('dashboard.user.administrasi.bayar_pendaftaran');
    }
    public function bayar_lainnya()
    {
        return view('dashboard.user.administrasi.bayar_lainnya');
    }

    public function dokumen()
    {
        return view('dashboard.user.administrasi.dokumen',[
            'title' => 'Dokumen',
            'doc' => Dokumen::where('biodata_id',auth()->user()->bio->id)->first()
        ]);
    }

    public function updocument(Request $request)
    {
        $validatedDoc = $request->validate([
              'biodata_id' => '',
              'akta_lahir' => 'file|max:1024',
              'kartu_keluarga' => 'file|max:1024',
              'pas_photo' => 'file|max:1024',
              'ijazah_terakhir' => 'file|max:1024', 
              'transkrip_nilai' => 'file|max:1024', 
        ]);
        $validatedDoc['biodata_id'] = auth()->user()->bio->id;


        // $validatedDoc = $request->file(['akta_lahir','kartu_keluarga','pas_photo','ijazah_terakhir', 'transkrip_nilai'])->store('docpict');
        if($request->file('akta_lahir')){
            if ($request->oldDoc1) {
                Storage::delete($request->oldDoc1);
            }
            $validatedDoc['akta_lahir'] = $request->file('akta_lahir')->store('docpict');
        }
        if($request->file('kartu_keluarga')){
            if ($request->oldDoc2) {
                Storage::delete($request->oldDoc2);
            }
            $validatedDoc['kartu_keluarga'] = $request->file('kartu_keluarga')->store('docpict');
        }
        if($request->file('pas_photo')){
            if ($request->oldDoc3) {
                Storage::delete($request->oldDoc3);
            }
            $validatedDoc['pas_photo'] = $request->file('pas_photo')->store('docpict');
        }
        if($request->file('ijazah_terakhir')){
            if ($request->oldDoc4) {
                Storage::delete($request->oldDoc4);
            }
            $validatedDoc['ijazah_terakhir'] = $request->file('ijazah_terakhir')->store('docpict');
        }
        if($request->file('transkrip_nilai')){
            if ($request->oldDoc5) {
                Storage::delete($request->oldDoc5);
            }
            $validatedDoc['transkrip_nilai'] = $request->file('transkrip_nilai')->store('docpict');
        }
        
      
        Dokumen::where('biodata_id',auth()->user()->bio->id)
                ->update($validatedDoc);

        return back()->with('updoc','Dokumen Berhasil Diunggah');
    }

    public function email_password()
    {
        $user = User::where('id',auth()->user()->id)->first();
        return view('dashboard.user.profile.email_password',[
            'title' => 'Email & Password',
            'user' => $user
        ]);
    }

    public function formasek(){
        return view('dashboard.user.create.createasek');
    }

    public function formortu(){
        return view('dashboard.user.create.createortu');
    }

    

    public function editpassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)){
            User::where('id',auth()->user()->id)
            ->update(['password' => Hash::make($request->password)]);
            return back()->with('berhasil','Password Berhasil Diubah');
        }else{
            return back()->with('gagal','Password Gagal Diubah');
        }
    }

    public function editemail(Request $request){
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if(Hash::check($request->password,auth()->user()->password)){
            User::where('id',auth()->user()->id)
                ->update($request->only('email'));
            return back()->with('berhasilemail','Email Berhasil Diubah');
        }else{
            return back()->with('gagalemail','Email Gagal Diubah');
        }
        // throw ValidationException::withMessages([
        //     'email' => "Maaf, Password Yang Anda Masukkan Tidak Benar."
        // ]);
    }

    public function updatewalilain(Request $request){
        $wali = ['biodata_id'   => auth()->user()->bio->id,
                 'role'         => $request->role3,
                 'nik'          => $request->nik3,
                 'name'         => $request->name3,
                 'birthplace'   => $request->birthplace3,
                 'birthday'     => $request->birthday3,
                 'religion'     => $request->religion3,
                 'profession'   => $request->profession3,
                 'phone'        => $request->phone3
                ];
    $alamatWali = ['alamat' => $request->alamat3,
                'for'           => $request->for3,
                'kecamatan'     => $request->kecamatan3,
                'kabupaten'     => $request->kabupaten3,
                'provinsi'      => $request->provinsi3,
                'kodepos'       => $request->kodepos3
               ];
        WaliLain::where('biodata_id',auth()->user()->bio->id)
                ->update($wali);
        Alamat::where('reference_id',auth()->user()->bio->id)
               ->where('for','wali')
               ->update($alamatWali);
        return back()->with("waliubah","Data Wali Berhasil di Edit");
        
    }

}
