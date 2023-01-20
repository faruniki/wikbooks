<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerAccount(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'password' => 'required',
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        user::create($credentials);

        return redirect('login')->with('success','Berhasil membuat akun!');
    }
}
