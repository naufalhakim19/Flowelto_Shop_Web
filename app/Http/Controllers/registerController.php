<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    public function view(){
        return view('register');
    }
    //validasi pada bagian register
    public function user(Request $request){

        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'gender' => 'required',
            'dob' => 'required',
            'address' => 'required|min:10',
            'confirm_password' => 'required|same:password',
        ]);
        //untuk sembunyikan password
        $password = bcrypt ($request->password);
        DB::table('users')->insert([
            'username' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'gender' => $request->gender,
            'DOB' => $request->dob,
            'address' => $request->address,
            'role' => 'User'
        ]);
        return view('login');
    }
}
