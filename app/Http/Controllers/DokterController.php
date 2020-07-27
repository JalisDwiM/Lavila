<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dokter;
use App\User;

class DokterController extends Controller
{
    public function dokter_role()
    {
        //mengambil data dari tabel doketers
        $user = User::with(['roles' => function ($query) {
            $query->where('name', '=', 'dokter');
        }])->get();

        //mengirim data ke view dokter
        return view('admin.dokter', ['user' => $user]);
    }

    public function store(Request $request)
    {
        DB::table('dokters')->insert([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'spesialis' => $request->spesialis,

        ]);
        return redirect()->back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    public function edit($id)
    {
        $dokter = Dokter::find($id); //mengambil data dokter berdasarkan id

        return view('admin.form.formedit', ['dokter' => $dokter]);
    }

    public function update(Request $request, $id)
    {
        // return $request->id;
        // return $request->all();
        // //update data dokter
        // $dokter = Dokter::find($id);
        // $dokter->update($request->all());
        DB::table('dokters')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'spesialis' => $request->spesialis
        ]);
        return redirect("/admin/dokter")->with(['success' => 'Data Berhasil Diubah']);
    }

    public function hapus($id)
    {
        DB::table('dokters')->where('id', $id)->delete();

        return redirect('/admin/dokter')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
