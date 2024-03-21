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

    public function persetujuan(){
        return view('partial.layouts');
    }
}