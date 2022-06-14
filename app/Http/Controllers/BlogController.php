<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function home(){

		return view('home');
	}

	public function tentang(){
		return view('tentang');
	}

	public function mahasiswa(){

        $users = DB::table('users')->paginate(10);
        
		return view('mahasiswa', ['users' => $users]);
	}
}
