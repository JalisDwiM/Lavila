<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    // public function admin()
    // {
    //     if (request()->user()->hasRole('admin')) {
    //         return view('welcome');
    //     } else {
    //         return redirect('/');
    //     }
    // }

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
        //mengambil data dari tabel doketers
        $dokter = DB::table('dokters')->get();

        //mengirim data ke view dokter
        return view('admin.dokter', ['dokter' => $dokter]);
    }
    public function poli()
    {
        //mengambil data dari tabel doketers
        // $dokter = DB::table('dokters')->get();

        //mengirim data ke view dokter
        return view('admin.poli');
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

    public function register()
    {
        return view('admin.registeradmin');
    }
}
