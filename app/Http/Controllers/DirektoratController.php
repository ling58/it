<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirektoratController extends Controller
{
    public function index()
    {
        $direktorat = \App\Direktorat::all();
        return view('direktorat.index',['direktorat' => $direktorat]);
    }
    
        public function create(Request $request) {
        
        $direktorat = \App\Direktorat::create($request->all());
        return redirect('/direktorat')->with('success', 'Data Berhasil di input'); 
    
    }

    public function delete($id)
    {
        $direktorat = \App\Direktorat::find($id);

        $direktorat->delete();

        return redirect('/direktorat');
    }

}
