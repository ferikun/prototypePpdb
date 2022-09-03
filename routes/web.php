<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BiosiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SekolahController;
use App\Models\Biodata;
use App\Models\Sekolah;
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
})->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'create']);

Route::post('/logout',[LogoutController::class,'logout']);
// DASHBOARD
Route::group(['middleware' => ['auth', 'role:siswa,admin']], function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
    

});


//CRUD BIO
// Route::resources('/bio/create',BiodataController::class);

//Halaman Khusus User
Route::get('/createbio',[UserController::class,'CreateBio']);
Route::get('/dashboard/profil',[DashboardController::class, 'profil'])->middleware('auth', 'role:siswa');
Route::get('/dashboard/pengumuman',[DashboardController::class, 'pengumuman'])->middleware('auth', 'role:siswa');
Route::get('/dashboard/pembayaran',[DashboardController::class, 'pembayaran'])->middleware('auth', 'role:siswa');
Route::get('/dashboard/dokumen',[DashboardController::class, 'dokumen'])->middleware('auth', 'role:siswa');
//=========================================================================

//Halaman khusus admin
//informasi sekolah
Route::resource('/dashboard/sekolah', SekolahController::class);
Route::post('/dashboard/kontak-edit/{id}', [SekolahController::class, 'Kontak']);
Route::post('/dashboard/upload-image/{id}', [SekolahController::class, 'ImageSekolah']);
//==========================================================================================================
// Route::resource('/daftar-siswa', SiswaController::class);
// Route::resource('/daftar-siswa/{id}', SiswaController::class);
// Rute::get('/dashboard/calon-siswa',[AdminController::class,'CalonSiswa'])->middleware('auth','role:admin');
Route::get('/dashboard/input-nilai',[AdminController::class, 'InputNilai'])->middleware('auth','role:admin');
// Route::get('/dashboard/sekolah',[AdminController::class,'ProfilSekolah'])->middleware('auth','role:admin');
Route::get('/dashboard/daftarsiswa', [AdminController::class,'showdata'])->middleware('auth','role:admin');
Route::get('/dashboard/siswa-tidak-lulus',[AdminController::class,'TidakLulus'])->middleware('auth','role:admin');
Route::get('/dashboard/keuangan',[AdminController::class, 'Keuangan'])->middleware('auth','role:admin');
Route::get('/dashboard/pengumuman',[AdminController::class, 'Pengumuman'])->middleware('auth','role:admin');


//CRUD
Route::get('/calon-siswa/delete/{id}', function($id){
    $user = Biodata::find($id);
    $user->nilai()->delete(); //menghapus nilai
    $user->asalsekolah()->delete(); //menghapus asal sekolah
    $user->iduser()->delete(); // menghapus data user
    $user->delete(); //menghapus data biodata
    return redirect('/dashboard/calon-siswa');
});
Route::get('/admin/biosiswa/{bio}',[BiosiswaController::class,'showbiosiswa']);

Route::get('/user/biosiswa/{bio}',[BiosiswaController::class,'showbiodata']);

Route::resource('/user/biodata', BiosiswaController::class);

