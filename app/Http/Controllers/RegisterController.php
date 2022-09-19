<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('daftar.create');
    }

    public function create(Request $request)
    {
        /*
            Data request pertama akan di validate terlebih dahulu,
            jika data sesuai kriteria (sesuai rule) maka akan di lanjutkan 
            untuk keamanan password akan di hash terlebih dahulu, dan role untuk jaga2
            akan di atur menjadi siswa,
            setelah seesai maka akan dibuatkan data di table user
            jika sudah maka user akan di alihkan ke halaman '/login'
        */

        $validatedData = $request->validate([
            "username" => "required|min:5",
            "email" => "required|email:dns",
            "password" => "required|min:8"
        ]);
        $validatedData['role'] = "siswa";
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success','Selamat Akun anda telah berhasil dibuat, silahkan Login!');
    }
}
