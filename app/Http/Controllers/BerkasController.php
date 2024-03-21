<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function sidang(){
        return view('berkas.sidang');
    }

    public function createSidang(){
        return view('berkas.createSidang');
    }

    public function yudisium(){
        return view('berkas.yudisium');
    }
}
