<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PtController extends Controller
{
    public function index()
    {
        $pt = \App\Pt::all();

        return view ('pt.index',['pt' => $pt]);
    }

    public function create(Request $request)
    {
        $pt = \App\Pt::create($request->all());

        return redirect('/pt');
    }

    public function delete($id)
    {
        $pt = \App\Pt::find($id);

        $pt->delete();

        return redirect('/pt');
    }
}
