<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //View Registrasi
    public function register(){

    	return view('form');

    }

    public function welcome(Request $request){

    	$namaDepan = $request->input('firstName');
    	$namaBelakang = $request->input('lastName');

    	return view('welcome', ['nama' => $namaDepan . " " . $namaBelakang]);

    }
}
