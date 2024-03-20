<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function view(){
        return view('layout.main');
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        dd($request->all());
    }

    public function sidang(){
        return view('berkas.sidang');
    }

    public function yudisium(){
        return view('berkas.yudisium');
    }
}
