<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function dashboard(){
        return(view('Akademik.Dashboard'));
    }

    public function showPengumuman(){
        return(view('Akademik.Pengumuman'));
    }

    public function addPengumuman(){
        return(view('Akademik.AddPengumuman'));
    }

    public function showUser(){
        return(view('Akademik.user.mahasiswaShowAll'));
    }
    public function showUserDetail(){
        return(view('Akademik.user.mahasiswaShowDetail'));
    }
    public function showProyek(){
        return(view('Akademik.projects.project'));
    }

    public function showDosen(){
        return(view('Akademik.user.DosenShowAll'));
    }
    public function showDosenBimbingan(){
        return(view('Akademik.user.DosenShowBimbingan'));
    }


    public function showProyekDetail(){
        return(view('Akademik.projects.project_detail'));
    }

    public function addProyek(){
        return(view('Akademik.projects.project_add'));
    }
    public function updateProyek(){
        return(view('Akademik.projects.project_update'));
    }



    public function showPersetujuan(){
        return(view('Akademik.persetujuan.persetujuan_TA'));
    }
    public function showPersetujuan_bimbingan(){
        return(view('Akademik.persetujuan.persetujuan_TA_view_bim'));
    }
    public function showPersetujuan_edit_proses(){
        return(view('Akademik.persetujuan.persetujuan_TA_edit_proses'));
    }
    public function showPersetujuan_edit_revisi(){
        return(view('Akademik.persetujuan.persetujuan_TA_edit_revisi'));
    }



    public function showPeriode(){
        return(view('Akademik.periode.periode'));
    }

}