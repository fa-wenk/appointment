<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\KebijakanBantuanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AppointmentController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/new_user', [App\Http\Controllers\HomeController::class, 'new_user'])->name('new_user');
Route::get('/otp', [App\Http\Controllers\HomeController::class, 'otp'])->name('otp');
Route::resource('/berita', BeritaController::class);
Route::resource('/dokter', DokterController::class);
Route::resource('/pasien', PasienController::class);
Route::resource('/profil-rs', RumahSakitController::class);
Route::resource('/janji', AppointmentController::class);

// Bantuan dan Kebijakans
Route::get('/faq', [KebijakanBantuanController::class, 'faq'])->name('faq');
Route::get('/syarat-dan-ketentuan', [KebijakanBantuanController::class, 'syarat_dan_ketentuan'])->name('syarat-dan-ketentuan');
Route::get('/tentang', [KebijakanBantuanController::class, 'tentang'])->name('tentang');
Route::get('/kebijakan-privasi', [KebijakanBantuanController::class, 'kebijakan_privasi'])->name('kebijakan-privasi');

Route::get('/jadwal/{id}', [JadwalController::class, 'edit'])->name('jadwal');
Route::get('/jam', [JadwalController::class, 'jam'])->name('jam');
Route::post('/jadwal/update', [JadwalController::class, 'store'])->name('jadwal.store');
Route::middleware(['auth','admin'])->group(function(){

});