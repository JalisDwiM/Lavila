<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function admin()
    {
        if (request()->user()->hasRole('admin')) {
            return view('welcome');
        } else {
            return redirect('/');
        }
    }

    public function berandaadmin()
    {
        return view('admin.beranda');
    }

    public function grafikantrian()
    {
        return view('admin.grafikantrian');
    }

    public function pengunjung()
    {
        return view('admin.pengunjung');
    }

    public function dokter()
    {
        return view('admin.dokter');
    }

    public function jadwal()
    {
        return view('admin.jadwal');
    }

    public function roles()
    {
        return view('admin.roles');
    }

    public function review()
    {
        return view('admin.review');
    }
}
