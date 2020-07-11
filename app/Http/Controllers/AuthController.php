<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getHome()
    {
        return view('home');
    }

    public function getLogin()
    {
        return view('layouts.login');
    }

    public function postLogin(Request $request)
    {
        dd('Login Oke');
    }

    public function getRegister()
    {
        return view('layouts.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/register');
    }
}
