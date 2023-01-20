<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(){
        return view('login');
    }


    public function postLogin(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email:dns',    
            'password'=>'required',
        ]);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}