<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use alert;

use Illuminate\Http\Request;
use App\Models\Biodata;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard');
        }

        /*
            Data request akan di validasi terlebih dahulu,
            kemudian akan di lakukan auth
            jika Data sesuai dengan yang di database
            maka akan di alihkan ke '/dashboard',
            tetapi jika tidak sama atau gagal, akan di arahkan
            ke menu login lagi dengan membawa pesan Flash
        */
        

        return back()->with('warning','Login Anda Gagal');
    }
}
