<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;
use App\ModelUser;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getHome()
    {
        return view('home');
    }

    public function home()
    {
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
        } else {
            return redirect('/berandauser');
        }
    }


    public function getLogin()
    {
        return view('layouts.login');
    }

    public function postLogin(Request $request)
    {
        // return $request->all();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect('/berandauser');
        }
        return redirect()->back();
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
        return redirect('login')->with('alert-success', 'Kamu berhasil Register');
    }
}
