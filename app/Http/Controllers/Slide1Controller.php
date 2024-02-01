<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Slide1Controller extends Controller
{
    public function index(){
        return view('admin.slide1');
    }

    public function create(){
        return view('admin.slide1-craete');
    }
}
