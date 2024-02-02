<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function index(){
        return view('admin.dashbord');
    }

    public function authenticate(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.dashbord');
        }else{
            return redirect()->route('admin.login')->with('failed', 'Email atau password salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login')->with('logout', 'Berhasil Logout');
    }
}
