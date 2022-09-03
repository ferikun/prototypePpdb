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
    //    $bio =  Biodata::where('user_id', auth()->user()->id);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            // if($bio->fill = false){
            //     return redirect('/dashboard/create');
            // }
            
            return redirect()->intended('/dashboard');
        }
 
    //    $warning = Alert::warning('Warning Title', 'Warning Message');
        

        return back()->with('warning','Login Anda Gagal');
    }
}
