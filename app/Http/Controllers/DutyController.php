<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DutyController extends Controller
{
    public function index()
    {
        $duty = \App\Duty::all();

        return view ('duty.index',['duty' => $duty]);
    }

    public function create(Request $request)
    {
        $duty = \App\Duty::create($request->all());

        return redirect('/duty');
    }

    public function delete($id)
    {
        $duty = \App\Duty::find($id);

        $duty->delete();

        return redirect('/duty');
    }
}
