<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\AkunController;

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

// login
Route::get('/', [AkunController::class, 'login'])->name('login');


// Akun - Mahasiswa
Route::get('/mahasiswa', [AkunController::class, 'viewMahasiswa'])->name('mahasiswa');
Route::get('/createMahasiswa', [AkunController::class, 'createMahasiswa'])->name('createMahasiswa');
Route::put('/storeMahasiswa', [AkunController::class, 'storeMahasiswa'])->name('storeMahasiswa');

// Akun - Akademik
Route::get('/akademik', [AkunController::class, 'viewAkademik'])->name('akademik');

// Akun - Kaprodi
Route::get('/kaprodi', [AkunController::class, 'viewKaprodi'])->name('kaprodi');

// Akun - Dosen
Route::get('/dosen', [AkunController::class, 'viewDosen'])->name('dosen');


// Berkas
Route::get('/sidang', [BerkasController::class,  'sidang'])->name('sidang');
Route::get('/createSidang', [BerkasController::class, 'createSidang'])->name('createSidang');
Route::get('/yudisium', [BerkasController::class, 'yudisium'])->name('yudisium');



