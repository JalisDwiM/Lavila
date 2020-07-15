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
    public function getHome()
    {
        return view('home');
    }

    public function home()
    {
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
        } else {
            return redirect('/beranda');
        }
    }


    public function getLogin()
    {
        return view('layouts.login');
    }

    public function postLogin(Request $request)
    {
        //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

        //         return redirect('/beranda');
        //     }
        //     return redirect()->back();
        // }

        $email = $request->email;
        $password = $request->password;

        $data = User::where('email', $email)->first();
        if ($data) { //apakah email tersebut ada atau tidak
            if (Hash::check($password, $data->password)) {
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('login', TRUE);
                return redirect('beranda.berandauser');
            } else {
                return redirect('login')->with('alert', 'Password atau Email, Salah !');
            }
        } else {
            return redirect('login')->with('alert', 'Password atau Email, Salah!');
        }
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
