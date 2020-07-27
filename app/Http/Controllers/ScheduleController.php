<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Schedule;


class ScheduleController extends Controller
{

    public function store(Request $request)
    {
        // return $request->all();
        Schedule::create([
            'user_id' => $request->user_id,
            'poli' => $request->poli,
            'kuota' => $request->kuota,
            'date' => $request->date,

        ]);
        return redirect()->back()->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    public function schedule()
    {
    }
}
