<?php

namespace App\Http\Controllers;
use App\Models\Alamat;
use App\Models\DataOrangTua;
use App\Models\Biodata;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\WaliLain;
use Illuminate\Http\Request;

class OrangtuaWaliController extends Controller
{
    public function createortu(Request $request)
    {
        // dd($request->all());
        $bio = Biodata::find(auth()->user()->bio->id);
        $ayah = [
                'biodata_id'       => $request->biodata_id1,
                'role'             => $request->role1,
                'name'             => $request->name1,
                'birthday'         => $request->birthday1,
                'religion'         => $request->religion1,
                'profession'       => $request->profession1,
                'phone'            => $request->phone1
       ];
        $ibu = [
                'biodata_id'       => $request->biodata_id2,
                'role'             => $request->role2,
                'name'             => $request->name2,
                'birthday'         => $request->birthday2,
                'religion'         => $request->religion2,
                'profession'       => $request->profession2,
                'phone'            => $request->phone2
               ];

        $bio->orangtua()->createMany([$ayah,$ibu]);
        $ortu = DataOrangTua::where('biodata_id',auth()->user()->bio->id)->first();                
        $alamatAyah = ['alamat'    => $request->alamat1,
                       'for'       => $request->for1,
                       'kecamatan' => $request->kecamatan1,
                       'kabupaten' => $request->kabupaten1,
                       'provinsi'  => $request->provinsi1,
                       'kodepos'   => $request->kodepos1
                      ];
        $alamatIbu =  ['alamat'    => $request->alamat2,
                       'for'       => $request->for2,
                       'kecamatan' => $request->kecamatan2,
                       'kabupaten' => $request->kabupaten2,
                       'provinsi'  => $request->provinsi2,
                       'kodepos'   => $request->kodepos2
                       ];
        $ortu->alamat()->createMany([$alamatAyah,$alamatIbu]); 
        

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
        $bio->walilain()->create($wali);
        $wali = WaliLain::where('biodata_id',auth()->user()->bio->id)->first();
        $alamatWali = ['alamat'    => $request->alamat3,
                       'for'       => $request->for3,
                       'kecamatan' => $request->kecamatan3,
                       'kabupaten' => $request->kabupaten3,
                       'provinsi'  => $request->provinsi3,
                       'kodepos'   => $request->kodepos3
                      ];
        $wali->alamat()->create($alamatWali);
        return redirect('/dashboard');                      

    }

    public function profilwali()
    {
        $bio_id = auth()->user()->bio->id;
        try{
        $ayah = DataOrangTua::where([
        'biodata_id' => $bio_id,
        'role'=>'ayah'
        ])->firstOrFail();
        
        $ibu = DataOrangTua::where([
            'biodata_id' => $bio_id,
            'role' => 'ibu'
            ])->firstOrFail();

        $wali = WaliLain::where('biodata_id', $bio_id)->first();

        $alamatAyah = Alamat::where([['reference_id', $bio_id],['for','ayah']])->first();

        $alamatIbu = Alamat::where([['reference_id', $bio_id],['for','ibu']])->first();

        $alamatWali = Alamat::where([['reference_id', $bio_id],['for','wali']])->first();
        } catch( ModelNotFoundException $exception){
            return view('dashboard.createortu');
        }

        return view('dashboard.user.profile.profil_orang_tua',[
            "title" => 'Profil Orang Tua',
            "ayah" => $ayah,
            "ibu"  => $ibu,
            "wali" => $wali,
            "alamatAyah" => $alamatAyah,
            "alamatIbu" => $alamatIbu,
            "alamatWali" => $alamatWali
        ]);
    }

    
    public function updateortu(Request $request)
    {
        $ayah = [
            'biodata_id'       => auth()->user()->bio->id,
            'role'             => $request->role1,
            'name'             => $request->name1,
            'birthday'         => $request->birthday1,
            'religion'         => $request->religion1,
            'profession'       => $request->profession1,
            'phone'            => $request->phone1
        ];   
    $ibu = [
            'biodata_id'       => auth()->user()->bio->id,
            'role'             => $request->role2,
            'name'             => $request->name2,
            'birthday'         => $request->birthday2,
            'religion'         => $request->religion2,
            'profession'       => $request->profession2,
            'phone'            => $request->phone2
           ];
$alamatAyah = ['alamat'    => $request->alamat1,
                'for'       => $request->for1,                
                'kecamatan' => $request->kecamatan1,
                'kabupaten' => $request->kabupaten1,
                'provinsi'  => $request->provinsi1,
                'kodepos'   => $request->kodepos1
          ];
$alamatIbu =  ['alamat'    => $request->alamat2,
                'for'       => $request->for2,
                'kecamatan' => $request->kecamatan2,
                'kabupaten' => $request->kabupaten2,
                'provinsi'  => $request->provinsi2,
                'kodepos'   => $request->kodepos2
                ];
        DataOrangTua::where('biodata_id',auth()->user()->bio->id)
                    ->where('role','ayah')
                    ->update($ayah);
        DataOrangTua::where('biodata_id',auth()->user()->bio->id)
                    ->where('role','ibu')
                    ->update($ibu);
        Alamat::where('reference_id',auth()->user()->bio->id)
                ->where('for','ayah')
                ->update($alamatAyah);
        Alamat::where('reference_id',auth()->user()->bio->id)
                ->where('for','ibu')
                ->update($alamatIbu);
                
        return back()->with('berhasil','Data Orang Tua Berhasil Diubah');
    }

    public function updatewali(Request $request){
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
