<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanHarianController extends Controller
{
    public function index(){
        return view('admin.kegiatan-harian');
    }

    public function create(){
        return view('');
    }
}
