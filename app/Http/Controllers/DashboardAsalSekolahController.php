<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\AsalSekolah;
use App\Models\Biodata;
use App\Models\WaliAyah;
use App\Models\WaliIbu;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAsalSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $bio = Biodata::find(auth()->user()->bio->id);

        $validatedAsalSekolah = $request->validate([
            'biodata_id' => '',
            'name' => 'required',
            'sktb' => 'required'
        ]);
        $validatedAsalSekolah['biodata_id'] = auth()->user()->bio->id;
        $bio->asalsekolah()->create($validatedAsalSekolah);
        $asek = AsalSekolah::where('biodata_id',auth()->user()->bio->id)->first();
        $validatedAlamatASek = $request->validate([
            'alamat' => 'required',
            'for' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kodepos' => 'required'
        ]);
        $asek->alamat()->create($validatedAlamatASek);
        
        return redirect('/dashboard/createortu');
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
        try{
        $asek = AsalSekolah::where('biodata_id',auth()->user()->bio->id)->firstOrFail();
        $address = Alamat::where('reference_id',auth()->user()->bio->id)
                         ->where('for','asal sekolah')
                         ->firstOrFail();
        } catch( ModelNotFoundException $exception){
            return view('dashboard.createasek');
        }
        
        return view('dashboard.user.profile.profil_asal_sekolah',[
            "title" => 'Asal Sekolah',
            "asek" => $asek,
            "address" => $address
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
        

        $validatedAsalSekolah = $request->validate([
            'biodata_id' => '',
            'name' => 'required',
            'sktb' => 'required'
        ]);
        $validatedAsalSekolah['biodata_id'] = auth()->user()->bio->id;
        AsalSekolah::where('biodata_id',auth()->user()->bio->id)
                    ->update($validatedAsalSekolah);
        $validatedAlamatASek = $request->validate([
            'alamat' => 'required',
            'for' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kodepos' => 'required'
        ]);
        Alamat::where('reference_id',auth()->user()->bio->id)
               ->where('for','asal sekolah')
               ->update($validatedAlamatASek);
        
        return back()->with('berhasil','Data Asal Sekolah Berhasil Diubah');
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
    }
}
