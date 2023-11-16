<?php

use App\Http\Controllers\DayatampungController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DownloadKategoriController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class , 'index']);
Route::get('/viewPengumuman/{id}', [WelcomeController::class , 'viewPengumuman'])->name('viewPengumuman');

Auth::routes();
//admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/jadwal', JadwalController::class);
Route::resource('/pengumuman', PengumumanController::class);
Route::resource('/timeline', TimelineController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/daya-tampung', DayatampungController::class);
Route::resource('/download', DownloadController::class);
Route::resource('/downloadkategori', DownloadKategoriController::class);


Route::get('/program-studi', [ProgramStudiController::class, 'index'])->name('program-studi');


Route::get('/jadwal-pendaftaran', [WelcomeController::class , 'indexJadwalPendaftaran'])->name('jadwal-pendaftaran');


Route::get('/persyaratan', [WelcomeController::class , 'indexPersyaratan'])->name('persyaratan');


Route::get('/alur-pendaftaran', function () {
    return view('alur-pendaftaran');
})->name('alur-pendaftaran');


Route::get('/biaya', function () {
    return view('biaya');
})->name('biaya');

Route::get('/program-alih-jenjang', function () {
    return view('program-alih-jenjang');
})->name('program-alih-jenjang');


Route::get('/seleksi-jalur-prestasi', [WelcomeController::class , 'indexSJP'])->name('seleksi-jalur-prestasi');


Route::get('/seleksi-jalur-tes', [WelcomeController::class , 'indexSJT'])->name('seleksi-jalur-tes');


Route::get('/seleksi-jalur-mandiri', [WelcomeController::class , 'indexSJM'])->name('seleksi-jalur-mandiri');


Route::get('/tes-kekhususan', [WelcomeController::class , 'indexTK'])->name('tes-kekhususan');


Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


Route::get('/downloads', [WelcomeController::class , 'download'])->name('downloads');