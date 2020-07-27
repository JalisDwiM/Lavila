<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Schedule;

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
        $schedules = Schedule::all();
        $users = User::with(['roles' => function ($query) {
            $query->where('name', '=', 'dokter');
        }])->get();

        return view('admin.jadwal', compact('users', 'schedules'));
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
        // auth()->loginUsingId($user->id);
        return redirect()->back();
    }
}
