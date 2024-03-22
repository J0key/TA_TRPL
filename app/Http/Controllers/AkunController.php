<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{

    public function login(){
        return view('layout.login');
    }

    public function dashboard(){
        return view('dashboard');
    }



    //Persetujuan
    public function persetujuan(){
        return view('persetujuan.persetujuan_TA');
    }
    public function persetujuan_view(){
        return view('persetujuan.persetujuan_TA_view_bim');
    }
    public function persetujuan_edit_proses(){
        return view('persetujuan.persetujuan_TA_edit_proses');
    }
    public function persetujuan_edit_revisi(){
        return view('persetujuan.persetujuan_TA_edit_revisi');
    }

    public function persetujuan_sidang(){
        return view('persetujuan.persetujuan_sidang');
    }
    public function persetujuan_yudisium(){
        return view('persetujuan.persetujuan_yudisium');
    }

    // Project
    public function project(){
        return view('projects.project');
    }
    public function project_detail(){
        return view('projects.project_detail');
    }


    // Akun
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
