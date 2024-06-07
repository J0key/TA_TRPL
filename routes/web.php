<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\DosenPageController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\MahasiswaPageController;

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

// Dashboard
Route::get('/dashboard', [AkunController::class, 'dashboard'])->name('dashboard');

// Akun
// Mahasiswa
Route::get('/mahasiswa', [AkunController::class, 'viewMahasiswa'])->name('mahasiswa');
Route::get('/createMahasiswa', [AkunController::class, 'createMahasiswa'])->name('createMahasiswa');
Route::put('/storeMahasiswa', [AkunController::class, 'storeMahasiswa'])->name('storeMahasiswa');
// Akademik
Route::get('/akademik', [AkunController::class, 'viewAkademik'])->name('akademik');
// Kaprodi
Route::get('/kaprodi', [AkunController::class, 'viewKaprodi'])->name('kaprodi');
// Dosen
Route::get('/dosen', [AkunController::class, 'viewDosen'])->name('dosen');


// Berkas
Route::get('/berkas_sidang', [BerkasController::class,  'sidang'])->name('berkas_sidang');
Route::get('/createSidang', [BerkasController::class, 'createSidang'])->name('createSidang');
Route::get('/berkas_yudisium', [BerkasController::class, 'yudisium'])->name('berkas_yudisium');


// Persetujuan
// Tugas Akhir
Route::get('/persetujuan', [AkunController::class, 'persetujuan'])->name('persetujuan');
Route::get('/persetujuan_view', [AkunController::class, 'persetujuan_view'])->name('persetujuan_view');
Route::get('/persetujuan_edit_proses', [AkunController::class, 'persetujuan_edit_proses'])->name('persetujuan_edit_proses');
Route::get('/persetujuan_edit_revisi', [AkunController::class, 'persetujuan_edit_revisi'])->name('persetujuan_edit_revisi');

Route::get('/persetujuan_sidang', [AkunController::class, 'persetujuan_sidang'])->name('persetujuan_sidang');
Route::get('/persetujuan_yudisium', [AkunController::class, 'persetujuan_yudisium'])->name('persetujuan_yudisium');



// Periode Registrasi

//Project
Route::get('/project', [AkunController::class, 'project'])->name('project');
Route::get('/project_detail', [AkunController::class, 'project_detail'])->name('project_detail');
Route::get('/project_add', [AkunController::class, 'project_add'])->name('project_add');
Route::get('/project_update', [AkunController::class, 'project_update'])->name('project_update');


//Periode
Route::get('/periode', [AkunController::class, 'periode'])->name('periode');


// login
Route::get('/', [AkunController::class, 'login'])->name('login');

// Dashboard
Route::get('/dashboard', [AkunController::class, 'dashboard'])->name('dashboard');


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

// MAHASISWA
// dashboard
Route::get('/mahasiswa/dashboard', [MahasiswaPageController::class,  'dashboard'])->name('mahasiswa.dashboard');
Route::get('/mahasiswa/profile', [MahasiswaPageController::class,  'profile'])->name('mahasiswa.profile');
Route::get('/mahasiswa/profile/update', [MahasiswaPageController::class,  'profileUpdate'])->name('mahasiswa.profileUpdate');
Route::get('/mahasiswa/profile_prestasi/update', [MahasiswaPageController::class,  'profilePrestasiUpdate'])->name('mahasiswa.profilePrestasiUpdate');
Route::get('/mahasiswa/profile_pengalaman/update', [MahasiswaPageController::class,  'profilePengalamanUpdate'])->name('mahasiswa.profilePengalamanUpdate');
Route::get('/mahasiswa/tugasakhir', [MahasiswaPageController::class,  'tugasakhir'])->name('mahasiswa.tugasakhir');
Route::get('/mahasiswa/pengumuman', [MahasiswaPageController::class,  'pengumuman'])->name('mahasiswa.pengumuman');


// Dosen
// dashboard
Route::get('/dosen/dashboard', [DosenPageController::class,  'dashboard'])->name('dosen.dashboard');
Route::get('/dosen/profile', [DosenPageController::class,  'profile'])->name('dosen.profile');
Route::get('/dosen/profile/update', [DosenPageController::class,  'profileUpdate'])->name('dosen.profileUpdate');
Route::get('/dosen/mahasiswa/pendadaran', [DosenPageController::class,  'mahasiswaPendadaran'])->name('dosen.mahasiswaPendadaran');
Route::get('/dosen/mahasiswa/bimbingan', [DosenPageController::class,  'mahasiswaBimbingan'])->name('dosen.mahasiswaBimbingan');
Route::get('/dosen/pengumuman', [DosenPageController::class,  'pengumuman'])->name('dosen.pengumuman');