<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BiosiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'create']);

Route::post('/logout',[LogoutController::class,'logout']);
// DASHBOARD
Route::group(['middleware' => ['auth', 'role:siswa,admin']], function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
    

});

Route::get('/dashboard/profil',[DashboardController::class, 'profil']);
Route::get('/dashboard/pengumuman',[DashboardController::class, 'pengumuman']);
Route::get('/dashboard/pembayaran',[DashboardController::class, 'pembayaran']);
Route::get('/dashboard/dokumen',[DashboardController::class, 'dokumen']);

Route::get('/admin/daftarsiswa', [UserController::class,'showdata']);

Route::get('/admin/biosiswa/{bio}',[BiosiswaController::class,'showbiosiswa']);

Route::get('/user/biosiswa/{bio}',[BiosiswaController::class,'showbiodata']);

Route::resource('/user/biodata', BiosiswaController::class);

