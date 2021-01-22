<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatan = \App\Jabatan::all();

        return view ('jabatan.index',['jabatan' => $jabatan]);
    }

    public function create(Request $request)
    {
        $jabatan = \App\Jabatan::create($request->all());

        return redirect('/jabatan');
    }

    public function delete($id)
    {
        $jabatan = \App\Jabatan::find($id);

        $jabatan->delete();

        return redirect('/jabatan');
    }
}
