<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $level = \App\Level::all();

        return view('level.index',['level' => $level]);

    }

    public function create(Request $request)
    {
        $level = \App\Level::create($request->all());
        return redirect('/level')->with('success', 'Data berhasil di input');
    }

    public function delete($id)
    {
        $level = \App\Level::find($id);

        $level->delete();

        return redirect('/level')->with('success', 'Data berhasil di hapus');
    }

}
