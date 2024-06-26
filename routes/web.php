<?php

use App\Http\Controllers\AkademikController;
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


// AKADEMIK
Route::get('/akademik/dashboard', [AkademikController::class,  'dashboard'])->name('akademik.dashboard');

// AKADEMIK-INFO PENGUMUMAN
Route::get('/akademik/pengumuman', [AkademikController::class,  'showpengumuman'])->name('akademik.showpengumuman');
Route::get('/akademik/pengumuman/add', [AkademikController::class,  'addPengumuman'])->name('akademik.addPengumuman');
Route::post('/akademik/pengumuman/save', [AkademikController::class,  'savePengumuman'])->name('akademik.savePengumuman');

// AKADEMIK-INFO USER
Route::get('/akademik/show/user', [AkademikController::class,  'showUser'])->name('akademik.showUser');
Route::get('/akademik/show/user/detail', [AkademikController::class,  'showUserDetail'])->name('akademik.showUserDetail');
Route::get('/akademik/show/dosen', [AkademikController::class,  'showDosen'])->name('akademik.showDosen');
Route::get('/akademik/show/dosen/bimbingan', [AkademikController::class,  'showDosenBimbingan'])->name('akademik.showDosenBimbingan');

// AKADEMIK-MANAJEMEN AKUN
Route::get('/akademik/akun/mahasiswa', [AkademikController::class,  'showAkunMahasiswa'])->name('akademik.showAkunMahasiswa');
Route::get('/akademik/akun/mahasiswa/add', [AkademikController::class,  'addAkunMahasiswa'])->name('akademik.addAkunMahasiswa');
Route::post('/akademik/akun/mahasiswa/save', [AkademikController::class,  'saveAkunMahasiswa'])->name('akademik.saveAkunMahasiswa');
Route::get('/akademik/akun/mahasiswa/edit', [AkademikController::class,  'editAkunMahasiswa'])->name('akademik.editAkunMahasiswa');
Route::post('/akademik/akun/mahasiswa/saveedit', [AkademikController::class,  'saveEditAkunMahasiswa'])->name('akademik.saveEditAkunMahasiswa');

Route::get('/akademik/akun/dosen', [AkademikController::class,  'showAkunDosen'])->name('akademik.showAkunDosen');
Route::get('/akademik/akun/dosen/add', [AkademikController::class,  'addAkunDosen'])->name('akademik.addAkunDosen');
Route::post('/akademik/akun/dosen/save', [AkademikController::class,  'saveAkunDosen'])->name('akademik.saveAkunDosen');
Route::get('/akademik/akun/dosen/edit', [AkademikController::class,  'editAkunDosen'])->name('akademik.editAkunDosen');
Route::post('/akademik/akun/dosen/saveedit', [AkademikController::class,  'saveEditAkunDosen'])->name('akademik.saveEditAkunDosen');

// MANAJEMEN PERSEUJUAN
Route::get('/akademik/persetujuanTA', [AkademikController::class,  'showPersetujuan'])->name('akademik.showPersetujuan');
Route::get('/akademik/persetujuanTA/bimbingan', [AkademikController::class,  'showPersetujuan_bimbingan'])->name('akademik.showPersetujuan_bimbingan');
Route::get('/akademik/persetujuanTA/edit-proses', [AkademikController::class,  'showPersetujuan_edit_proses'])->name('akademik.showPersetujuan_edit_proses');
Route::get('/akademik/persetujuanTA/edir-revisi', [AkademikController::class,  'showPersetujuan_edit_revisi'])->name('akademik.showPersetujuan_edit_revisi');


// MANAJEMEN PERIODE
Route::get('/akademik/periodeTA', [AkademikController::class,  'showPeriode'])->name('akademik.showPeriode');


// AKADEMIK-MANAJEMEN PROYEK
Route::get('/akademik/proyek', [AkademikController::class,  'showProyek'])->name('akademik.showProyek');
Route::get('/akademik/proyek/detail', [AkademikController::class,  'showProyekDetail'])->name('akademik.showProyekDetail');
Route::get('/akademik/proyek/add', [AkademikController::class,  'addProyek'])->name('akademik.addProyek');
Route::get('/akademik/proyek/update', [AkademikController::class,  'updateProyek'])->name('akademik.updateProyek');



// MAHASISWA
// dashboard
Route::get('/mahasiswa/dashboard', [MahasiswaPageController::class,  'dashboard'])->name('mahasiswa.dashboard');
Route::get('/mahasiswa/profile', [MahasiswaPageController::class,  'profile'])->name('mahasiswa.profile');
Route::get('/mahasiswa/profile/update', [MahasiswaPageController::class,  'profileUpdate'])->name('mahasiswa.profileUpdate');
Route::get('/mahasiswa/profile_prestasi/update', [MahasiswaPageController::class,  'profilePrestasiUpdate'])->name('mahasiswa.profilePrestasiUpdate');
Route::get('/mahasiswa/profile_pengalaman/update', [MahasiswaPageController::class,  'profilePengalamanUpdate'])->name('mahasiswa.profilePengalamanUpdate');
Route::get('/mahasiswa/pengajuan', [MahasiswaPageController::class,  'pengajuan'])->name('mahasiswa.pengajuan');
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
