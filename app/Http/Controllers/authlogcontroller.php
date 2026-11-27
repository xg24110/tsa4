<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\sysuser;

class authlogcontroller extends Controller
{
    public function auth_log(Request $request){
        $credentials = $request->validate([
            'username'=>['required', 'string', 'max:100'],
            'password'=>['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/li');
        }

        return redirect('login')->withErrors([
            'username' => 'username does not exist or incorrect',
            'password' => 'incorrect password'
        ])->onlyInput('username');
    }

    public function end_session(Request $request){
        Auth::logout();
        return redirect('/');
    }
}

