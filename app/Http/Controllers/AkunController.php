<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{

    public function login(){
        return view('layout.login');
    }

    public function viewMahasiswa(){
        return view('akun.mahasiswa.mahasiswa');
    }

    public function viewAkademik(){
        return view('akun.akademik.akademik');
    }
    public function viewDosen(){
        return view('akun.dosen.dosen');
    }

    public function viewKaprodi(){
        return view('akun.kaprodi.kaprodi');
    }

    public function createMahasiswa(){
        return view('akun.mahasiswa.create');
    }

    public function storeMahasiswa(Request $request){
        dd($request->all());
    }


}
