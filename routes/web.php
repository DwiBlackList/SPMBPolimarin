<?php

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
//Jadwal Route
Route::resource('/jadwal', JadwalController::class);
Route::resource('/pengumuman', PengumumanController::class);
Route::resource('/timeline', TimelineController::class);
Route::resource('/kategori', KategoriController::class);


Route::get('/program-studi', [ProgramStudiController::class, 'index'])->name('program-studi');


Route::get('/jadwal-pendaftaran', [WelcomeController::class , 'indexJadwalPendaftaran'])->name('jadwal-pendaftaran');


Route::get('/persyaratan', function () {
    return view('persyaratan');
})->name('persyaratan');


Route::get('/alur-pendaftaran', function () {
    return view('alur-pendaftaran');
})->name('alur-pendaftaran');


Route::get('/biaya', function () {
    return view('biaya');
})->name('biaya');

Route::get('/program-alih-jenjang', function () {
    return view('program-alih-jenjang');
})->name('program-alih-jenjang');


Route::get('/seleksi-jalur-prestasi', function () {
    return view('seleksi-jalur-prestasi');
})->name('seleksi-jalur-prestasi');


Route::get('/seleksi-jalur-tes', function () {
    return view('seleksi-jalur-tes');
})->name('seleksi-jalur-tes');


Route::get('/seleksi-jalur-mandiri', function () {
    return view('seleksi-jalur-mandiri');
})->name('seleksi-jalur-mandiri');


Route::get('/tes-kekhususan', function () {
    return view('tes-kekhususan');
})->name('tes-kekhususan');


Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


Route::get('/download', function () {
    return view('download');
})->name('download');