<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosisiController extends Controller
{
    public function index()
    {
        $posisi = \App\Posisi::all();

        return view ('posisi.index',['posisi' => $posisi]);
    }

    public function create(Request $request)
    {
        $posisi = \App\Posisi::create($request->all());

        return redirect('/posisi');
    }

    public function delete($id)
    {
        $posisi = \App\Posisi::find($id);

        $posisi->delete();

        return redirect('/posisi');
    }
}
