<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenPageController extends Controller
{
    public function dashboard(){
        return view('Dosen.Dashboard');
    }

    public function profile(){
        return view('Dosen.Profile');
    }

    public function tugasakhir(){
        return view('Mahasiswa.tugasakhir');
    }

    public function pengumuman(){
        return view('Mahasiswa.pengumuman');
    }

    public function profileUpdate(){
        return view('Dosen.ProfileUpdateView');
    }
    public function mahasiswaPendadaran(){
        return view('Dosen.PendadaranMahasiswa');
    }
    public function mahasiswaBimbingan(){
        return view('Dosen.BimbinganMahasiswa');
    }

}