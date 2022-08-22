<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BiosiswaController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/login', function () {
    return view('login.index',[
        "title" => "Login"
    ]);
});

Route::get('/daftar', function () {
    return view('daftar.create',[
        "title" => "Daftar"
    ]);
});

Route::get('/admin/daftarsiswa', [UserController::class,'showdata']);

Route::get('/admin/biosiswa/{bio}',[BiosiswaController::class,'showbiosiswa']);

Route::get('/user/biosiswa/{bio}',[BiosiswaController::class,'showbiodata']);

Route::resource('/user/biodata', BiosiswaController::class);

