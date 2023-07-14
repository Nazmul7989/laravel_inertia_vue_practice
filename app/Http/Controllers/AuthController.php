<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);

        $credentials = $request->only(['email','password']);

        if (Auth::attempt($credentials)) {
            return to_route('home.index');
        }else{
            return to_route('home.login');
        }


    }

    public function logout(Request $request)
    {
        Auth::logout();
        return to_route('home.login');
    }
}
