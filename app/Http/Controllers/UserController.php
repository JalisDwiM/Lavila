<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function berandauser()
    {
        if (request()->user()->hasRole('user')) {
            return view('user.berandauser');
        } else {
            return redirect('/')->with('warning', 'bukan hak akses anda');
        }
        // return view('beranda.berandauser');
    }

    public function antrianuser()
    {
        if (request()->user()->hasRole('user')) {
            return view('user.antrianuser');
        } else {
            return redirect('/');
        }
        // return view('beranda.antrianuser');
    }

    public function historiuser()
    {
        if (request()->user()->hasRole('user')) {
            return view('user.historiuser');
        } else {
            return redirect('/');
        }
        // return view('beranda.historiuser');
    }
}
