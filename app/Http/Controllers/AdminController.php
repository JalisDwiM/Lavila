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

    public function jadwal()
    {
        return view('admin.jadwal');
    }
}
