<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function daftar(){
        return view('daftar');
    }
    public function simpanuser(Request $req){
        $user = User::create([
            'nama' => $req-> nama,
            'email' => $req-> email,
            'password' => bcrypt($req-> password)
        ]);
        return redirect('/');
    }

    public function login(){
        return view('login');
    }

    public function cekmasuk(Request $req){
        if (!Auth::attempt([
            'email' => $req->email,
            'password' => $req->password
        ])){
            return redirect('/login');
        }
        else{
            return "Berhasil Login";
        }
    }
}
