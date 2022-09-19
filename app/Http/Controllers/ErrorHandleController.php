<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandleController extends Controller
{
    //
    public function notfound()
    {
        return view('dashboard.admin.setting.notfound');
    }
}
