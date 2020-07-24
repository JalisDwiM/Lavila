<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;
use App\ModelUser;
use App\Role;
//use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function postLogin(Request $request)
    {
        // return $request->all();
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            // $user = Auth::user();
            // // foreach ($user->roles as $r) {
            // //     if ($r->name == 'admin') {
            return redirect('/dashboard')->with(['success' => 'Selamat anda berhasil login']);
        }
        return redirect()->back()->with(['error' => 'username atau password tidak cocok']);
    }
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
            return redirect('login')->with('warning', 'Kamu harus login dulu');
        } else {
            return redirect('/user/beranda');
        }
    }


    public function getLogin()
    {
        return view('layouts.login');
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
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        $user->roles()->attach($request->input('role'));
        auth()->loginUsingId($user->id);
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
