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
        $validatedData = $request->validate([
            "role" => "required",
            "name" => "required",
            "username" => "required|min:5",
            "email" => "required|email:dns",
            "password" => "required|min:8"
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        session()->flash('berhasil','Selamat Pendaftaran akun telah berhasil, silahkan untuk login');

        return redirect('/login');
    }
}
