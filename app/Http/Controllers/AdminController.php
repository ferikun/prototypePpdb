<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function ProfilAdmin()
    {
        $db = Admin::where('admin_id',auth()->user()->id)->first();

        $bioAdmin = [
            "id" => $db->id,
            "nama" => $db->name,
            "username" => auth()->user()->username,
            "email" => auth()->user()->email,
            "telepon" => $db->telepon,
            "image" => $db->image

        ];
        return view('admin.index',[
            "data" => $bioAdmin
        ]);
    }

    public function EditAdmin(Request $request)
    {
        $validate = $request->validate([
            "nama" => 'required|min:5',
            "username" => 'required|min:5',
            "email" => 'required|email:dns',
            "telepon" => 'required|digits:12'
        ]);

                Admin::where('admin_id',auth()->user()->id)->update([
                    "name" => $validate['nama'],
                    "telepon" => $validate['telepon'],
                ]);
                User::find(auth()->user()->id)->update([
                    "username" => $validate['username'],
                    "email" => $validate['email']
                ]);
                return redirect('/dashboard/admin')->with('edit','Data Berhasil di ubah');

    }

    public function EditFoto(Request $request, $id)
    {
        $validate = $request->validate([
            "image" => ['required','image','mimes:jpg,png,jpeg','file','max:1024']
        ]);

        $validate['image'] = $request->file('image')->store('admin-profil');
        $admin = Admin::find($id);

        if($admin->image){

            Storage::delete($admin->image);
        }
        // @dd($path);
        // $img = File::delete($path);
        $admin->update([
            "name" => $admin->name,
            "telepon" => $admin->telepon,
            "image" => $validate['image']
        ]);

        return redirect('/dashboard/admin');
    }


    public function ResetPassword(Request $request, $id)
    {
        $passLama = auth()->user()->password;
        $valid = $request->validate([
            "PasswordLama" => ['required'],
            "PasswordBaru" => ['required','min:8'],
            "KonfirmasiPassword" => ['required','min:8','same:'."PasswordBaru"]
        ]);


        // @dd($passLama,$valid['PasswordLama']);
        $passhash = bcrypt($valid['PasswordBaru']);


        if (Hash::check($valid['PasswordLama'], $passLama)) {
            // The passwords match...
            // @dd('Berhasil');
            User::find($id)->update([
                "password" => $passhash
            ]);

            return redirect('/dashboard/admin')->with('notifberhasil','Selamat Password Anda berhasil Di Ubah');
        }
        else
        {
            return redirect('/dashboard/admin')->with('notifgagal','Maaf Password Lama yang anda masukan salah');
        }


        
    }

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
        //
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
