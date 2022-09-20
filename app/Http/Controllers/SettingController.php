<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function infosekolah()
    {
        return view('dashboard.admin.settings.infosekolah');
    }
}
