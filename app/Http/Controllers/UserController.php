<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = \App\User::all();

        return view('user.index',['user' => $user]);
    }

    public function edit($id)
    {
        $user = \App\User::find($id);

        return view('user/edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = \App\User::find($id);

        $user->update($request->all());

        return redirect('/user');
    }

}
