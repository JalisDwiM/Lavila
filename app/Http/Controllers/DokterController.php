<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller
{
    public function store(Request $request)
    {
        DB::table('dokters')->insert([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'spesialis' => $request->spesialis,

        ]);
        return redirect()->back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }
}
