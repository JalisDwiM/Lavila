<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function store(Request $request)
    {
        // return $request->all();
        Department::create([
            'nama' => $request->poli,
            'kode' => $request->kode,
        ]);
        return redirect()->back()->with(['success', 'Data Berhasil Ditambahkan']);
    }

    public function show()
    {
    }
}
