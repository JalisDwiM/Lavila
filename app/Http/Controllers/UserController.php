<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function berandauser()
    {
        if (request()->user()->hasRole('user')) {
            return view('user.beranda');
        } else {
            return redirect('/')->with('warning', 'bukan hak akses anda');
        }
        // return view('beranda.berandauser');
    }

    public function antrianuser()
    {
        if (request()->user()->hasRole('user')) {
            return view('user.antrian');
        } else {
            return redirect('/');
        }
        // return view('beranda.antrianuser');
    }

    public function historiuser()
    {
        if (request()->user()->hasRole('user')) {
            return view('user.histori');
        } else {
            return redirect('/');
        }
        // return view('beranda.historiuser');
    }

    public function pesanuser()
    {
        if (request()->user()->hasRole('user')) {
            return view('user.pesan');
        } else {
            return redirect('/');
        }

        // return view('beranda.historiuser');
    }
}
