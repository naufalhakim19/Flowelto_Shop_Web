<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function view(){
        return view('login');
    }
    public function AuthLogin(Request $request){
        
        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        else{
            return redirect()->action('loginController@view');
        }
    }
}
