<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaUserController extends Controller
{
    public function berandauser()
    {
        return view('beranda.berandauser');
    }

    public function antrianuser()
    {
        return view('beranda.antrianuser');
    }

    public function historiuser()
    {
        return view('beranda.historiuser');
    }
}
