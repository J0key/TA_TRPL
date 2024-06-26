<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaPageController extends Controller
{
    public function dashboard(){
        return view('Mahasiswa.Dashboard');
    }

    public function profile(){
        return view('Mahasiswa.Profile.Profile');
    }

    public function profileUpdate(){
        return view('Mahasiswa.Profile.ProfileUpdateView');
    }

    public function profilePrestasiUpdate(){
        return view('Mahasiswa.Profile.ProfileUpdatePrestasiView');
    }

    public function profilePengalamanUpdate(){
        return view('Mahasiswa.Profile.ProfileUpdatePengalamanView');
    }

    public function tugasakhir(){
        return view('Mahasiswa.tugasakhir');
    }

    public function pengajuan(){
        return view('Mahasiswa.pengajuan');
    }
    public function pengumuman(){
        return view('Mahasiswa.pengumuman');
    }

}
