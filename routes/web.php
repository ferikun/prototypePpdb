<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;


use App\Http\Controllers\DashboardAsalSekolahController;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\Index;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\OrangtuaWaliController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SettingController;
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

Route::get('/',[Index::class,'index'])->middleware('guest');
/* Halaman Login */
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

/* Halaman Register akun */
Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register/create',[RegisterController::class, 'createAccount'])->middleware('guest');

/* Halaman untuk Logout */
Route::post('/logout',[LogoutController::class,'logout']);


/*
------------------------------------DASHBOARD-----------------------------------------
*/
Route::group(['middleware' => ['auth', 'role:siswa,admin']], function(){
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
});

/* ------------------------------------------------------------------------------------- */

/*
|   HALAMAN DASHBO  ARD ADMIN
*/
/* Profile Admin */
Route::get('/profile/admin', [AdminController::class,'index']);
/* dashboard pendaftaran */
Route::get('/dashboard/daftar-siswa',[PendaftaranController::class,'daftarcalonsiswa']);
Route::get('/dashboard/verified-siswa',[PendaftaranController::class,'verified']);
Route::resource('/dashboard/nilai',NilaiController::class);
Route::get('/dashboard/hasil-akhir',[PendaftaranController::class,'hasilakhir']);

/* dashboard settings */
Route::get('/dashboard/settings/info-sekolah',[SettingController::class,'infosekolah']);
Route::resources([
    '/dashboard/settings/ppdb' => PpdbController::class,
    '/dashboard/settings/pengumuman' => PengumumanController::class,
    '/dashboard/settings/keuangan' => KeuanganController::class
]);



//========================================================================================================

/* 
|   HALAMAN DASHBOARD SISWA
*/

//halaman create
Route::get('/dashboard/createbio',[BiodataController::class,'formbio'])->middleware(['auth','cekbio']);
Route::post('/dashboard/create_bio',[BiodataController::class,'createBio'])->middleware('auth');
Route::get('/dashboard/createasek',[DashboardController::class,'formasek'])->middleware('auth');
Route::get('/dashboard/createortu',[DashboardController::class,'formortu'])->middleware('auth');

/*
----------------------------Halaman dashboard profile siswa-----------------------------------------
*/
Route::get('/dashboard/email_password',[DashboardController::class, 'email_password'])->middleware('auth');
Route::put('/dashboard/email_password/editemail',[DashboardController::class, 'editemail'])->middleware('auth');
Route::get('/dashboard/profil_siswa',[BiodataController::class,'profilBio'])->middleware('auth');
Route::resource('/dashboard/profilasek',DashboardAsalSekolahController::class)->middleware('auth');
Route::get('/dashboard/profilortu',[OrangtuaWaliController::class,'profilwali'])->middleware('auth');
/*--------------------------------------------------------------------------------------------------*/

/*
-----------------------------Halaman Dashboard Administrasi siswa--------------------------------------
*/
Route::get('/dashboard/bayar_pendaftaran',[DashboardController::class, 'bayar_pendaftaran'])->middleware('auth');
Route::get('/dashboard/bayar_lainnya',[DashboardController::class, 'bayar_lainnya'])->middleware('auth');
Route::get('/dashboard/dokumen',[DashboardController::class, 'dokumen'])->middleware('auth');
/*------------------------------------------------------------------------------------------------------*/

/*
---------------------------Halaman Post Pengumuman---------------------------------------
*/
Route::get('/dashboard/pengumuman',[DashboardController::class, 'pengumuman'])->middleware('auth');
/*----------------------------------------------------------------------------------------------*/

/* Route Proses Milik User Siswa */
Route::put('/dashboard/update_bio',[BiodataController::class,'updateBio'])->middleware('auth');
Route::put('/dashboard/update_minat',[BiodataController::class,'updateMinat'])->middleware('auth');
Route::put('/dashboard/email_password/editpw',[DashboardController::class, 'editpassword'])->middleware('auth');
Route::post('/dashboard/create_ortu',[OrangtuaWaliController::class,'createortu'])->middleware('auth');
Route::put('/dashboard/profilortu/editwali',[OrangtuaWaliController::class,'updatewali'])->middleware('auth');
Route::put('/dashboard/profilortu/editortu',[OrangtuaWaliController::class,'updateortu'])->middleware('auth');
Route::put('/dashboard/dokumen/up_doc',[DashboardController::class, 'updocument'])->middleware('auth');
Route::get('/dashboard/email_password',[DashboardController::class,'email_password'])->middleware('auth');
/*------------------------------------------------------------------------------------------------------*/


















// Route::get('/admin/biosiswa/{bio}',[BiosiswaController::class,'showbiosiswa']);
// Route::get('/dashboard/profil',[BiosiswaController::class,'showbiodata']);


