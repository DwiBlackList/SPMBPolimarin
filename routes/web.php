<?php

use App\Http\Controllers\ProgramStudiController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/program-studi', [ProgramStudiController::class, 'index'])->name('program-studi');


Route::get('/jadwal-pendaftaran', function () {
    return view('jadwal-pendaftaran');
})->name('jadwal-pendaftaran');


Route::get('/persyaratan', function () {
    return view('persyaratan');
})->name('persyaratan');


Route::get('/alur-pendaftaran', function () {
    return view('alur-pendaftaran');
})->name('alur-pendaftaran');