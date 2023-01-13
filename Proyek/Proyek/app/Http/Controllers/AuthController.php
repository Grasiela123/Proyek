<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function loginpage(){
        return view('login');
    }

    public function login(Request $request){

        if($request->remember){
            Cookie::queue('mycookie', $request->email, 30);
        }

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], true)){
            return redirect('home');
        }
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
