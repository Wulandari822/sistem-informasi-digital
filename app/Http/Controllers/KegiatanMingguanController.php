<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanMingguanController extends Controller
{
    public function index(){
        return view('admin.kegiatan-mingguan');
    }

    public function create(){
        return view('admin.kegiatan-mingguan-create');
    }
}
