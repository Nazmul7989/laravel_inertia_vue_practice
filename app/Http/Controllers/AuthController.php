<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login()
    {
        return Inertia::render('Login');
    }

    public function loginStore(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);

        $credentials = $request->only(['email','password']);

        if (Auth::attempt($credentials)) {
            return to_route('home.index')->with('success','Login Successfully!');
        }else{
            return to_route('login')->with('error','Opps! Login Failed.');
        }


    }

    public function logout(Request $request)
    {
        Auth::logout();
        return to_route('login')->with('success','Logout Successfully!');
    }
}
