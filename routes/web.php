<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ErrorHandleController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KeuanganController as ControllersKeuanganController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TahunController;
use Illuminate\Auth\Events\Login;
use Illuminate\Database\Connectors\PostgresConnector;
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

/*
|-----------------------------------------------------------------------------------------------
| ROUTE LOGIN
|-----------------------------------------------------------------------------------------------
| Route yang mengatur Kegiatan Login, dan hanya bisa di akses oleh middleware yang belum login
*/
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
/*----------------------------------------------------------------------------------------------*/

/* 
|------------------------------------------------------------------------------------------------------
| ROUTE REGISTER
|------------------------------------------------------------------------------------------------------
|    Route ini yang mengatur Kegiatan Register/Daftar Akun, route ini hanya bisa di akses oleh middleware yang belum Punya akun
*/
Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'create']);
/*---------------------------------------------------------------------------------------------------*/

/*
|-----------------------------------------------------------------------------
| Route Logout
|-----------------------------------------------------------------------------
| Route ini digunakan untuk mengatur kegiatan Logout akun
*/
Route::post('/logout',[LogoutController::class,'logout'])->middleware('auth');
/*----------------------------------------------------------------------------


/* 
|------------------------------------------------------------------------------------------------------
| -DASHBOARD-
|------------------------------------------------------------------------------------------------------
|    ROUTE ini akan mengarahkan User (admin dan siswa) ke index Dashboardcontroller
|    dan di Controller itu akan di arahkan ke halaman sesuai Role
*/
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth','role:siswa,admin']);
/*------------------------------------------------------------------------------------------------------*/

/*
|----------------------------------------------------------------------------------------------------
|Halaman Khusus User
|---------------------------------------------------------------------------------------------------
| !! Route ini yang mengatur Halaman yang dilihat User Role = siswa !!
*/
Route::get('/createbio',[UserController::class,'CreateBio']);
Route::get('/dashboard/profil',[DashboardController::class, 'profil'])->middleware('auth', 'role:siswa');
Route::get('/dashboard/pengumuman',[DashboardController::class, 'pengumuman'])->middleware('auth', 'role:siswa');
Route::get('/dashboard/pembayaran',[DashboardController::class, 'pembayaran'])->middleware('auth', 'role:siswa');
Route::get('/dashboard/dokumen',[DashboardController::class, 'dokumen'])->middleware('auth', 'role:siswa');
/*--------------------------------------------------------------------------------------------------*/


/*  
|-----------------------------------------------------------------------------------------------------
| HALAMAN KHUSUS ADMIN   
|-----------------------------------------------------------------------------------------------------    
| !! ROUTE DIBAWAH INI ROUTE YANG DIGUNAKAN OLEH ROLE ADMIN !!
|
|   
*/
Route::resource('/dashboard/sekolah', SekolahController::class)->middleware('auth','role:admin');
/*
|    Route Untuk Mengatur Data Profile Sekolah ()
*/
Route::post('/dashboard/kontak-edit/{id}', [SekolahController::class, 'Kontak'])->middleware('auth','role:admin');
/*
| Route Untuk Mengedit Data Kontak Sekolah
*/
Route::post('/dashboard/upload-image/{id}', [SekolahController::class, 'ImageSekolah'])->middleware('auth','role:admin');
/*
|   Route Untuk upload image sekolah
*/
/*------------------------------------------------------------------------------------------------------
|
|   EDIT HALAMAN ADMIN
|   !! Route Untuk mengatur Data Admin (profil,image,password dll) !!
*/
Route::controller(AdminController::class)->group(function(){
Route::get('/dashboard/admin', 'ProfilAdmin');
Route::post('/dashboard/admin','EditAdmin');
Route::post('/dashboard/admin/reset-password/{id}','ResetPassword');
}); //(sudah middleware)
/*-------------------------------------------------------------------------------------------------------
|   MENU Pendaftaran
|   !! Route Untuk Halaman yang ada di SUB-Menu Pendaftaran !!
|
*/
Route::resource('/dashboard/pendaftaran/daftar-siswa',PendaftaranController::class)->middleware('auth','role:admin');
/* 
| Data siswa yang telah terdaftar 
*/
Route::get('dashboard/siswa-profil/{id}',[SiswaController::class,'show']);
/*
| Data Profil per-siswa
*/
Route::get('/dashboard/verify/{id}',[NilaiController::class,'verify']);
/*
| Memverifikasi siswa
*/
//data siswa terverifikasi
Route::get('/dashboard/pendaftaran/terverifikasi',[DashboardController::class,'siswaVerifikasi'])->middleware('auth','role:admin');

//Melihat Data nilai
Route::get('/dashboard/pendaftaran/input-nilai',[NilaiController::class,'ViewInputNilai'])->middleware('auth','role:admin');

//Input Nilai
Route::post('/dashboard/input-nilai',[NilaiController::class,'InputNilai']);

//hasil akhir
Route::get('/dashboard/pendaftaran/hasil-akhir',[DashboardController::class,'hasilAkhir'])->middleware('auth','role:admin');

Route::post('/dashboard/siswa/hapus/{id}',[SiswaController::class,'hapus']);
/*----------------------------------------------------------------------------------------------------*/

//====================================================================================================


/*-------------------------------------------------------------------------------------------------------
|   MENU Setting
|   !! Route Untuk Halaman yang ada di SUB-Menu Setting !!
|
*/
Route::resources([
'/dashboard/setting/pengumuman' => PengumumanController::class, //setting pengumuman (sudah middleware) 
'/dashboard/setting/keuangan' => ControllersKeuanganController::class, //settingkeuangan (sudah middlware)
'/dashboard/tahun-ajaran' => TahunController::class, // tahun ajaran (sudah midleware)
'/dashboard/jurusan' => JurusanController::class, //Jurusan (sudah middleware)
'/dashboard/ruangan' => RuanganController::class //Ruangan ()
]);
//add ppdb
Route::get('/dashboard/setting/ppdb', [PpdbController::class,'index'])->middleware('auth','role:admin');
Route::get('/setting/ppdb/add/',[PpdbController::class,'create'])->middleware('auth','role:admin');
Route::post('/setting/ppdb/store',[PpdbController::class,'store'])->middleware('auth','role:admin');
//edit ppdb
Route::get('/ppdb/edit/{id}',[PpdbController::class, 'edit']);
Route::post('/ppdb/{id}/update/{tahunID}',[PpdbController::class, 'update']);
//delete ppdb
Route::post('/ppdb/delete/{id}',[PpdbController::class,'delete']);
//menyalakan Status PPDB
Route::get('ppdb/active/{id}',[PpdbController::class,'active']);
//Mematikan Status PPDB
Route::get('ppdb/notactive/{id}',[PpdbController::class,'notactive']);
//undifiend handle
Route::get('/dashboard/not-found',[ErrorHandleController::class,'notfound']);
//=====================================================================================================

//=====================================================================================================
Route::post('/dashboard/edit/foto/{id}',[AdminController::class,'EditFoto']);
Route::get('/dashboard/input-nilai',[AdminController::class, 'InputNilai'])->middleware('auth','role:admin');
Route::get('/dashboard/daftarsiswa', [AdminController::class,'showdata'])->middleware('auth','role:admin');
Route::get('/dashboard/siswa-tidak-lulus',[AdminController::class,'TidakLulus'])->middleware('auth','role:admin');
Route::get('/dashboard/pengumuman',[AdminController::class, 'Pengumuman'])->middleware('auth','role:admin');


