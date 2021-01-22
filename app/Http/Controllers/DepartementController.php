<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {
        $departement = \App\Departement::all();

        return view('departement.index',['departement' => $departement]);
    }
    
    public function create(Request $request) {
        
        
        $departement = \App\Departement::create($request->all());
        return redirect('/departement')->with('success', 'Data Berhasil di input'); 
    
    }

    public function delete($id) {
    
        $departement = \App\Departement::find($id);
    
        $departement->delete();
    
        return redirect('/departement')->with('success', 'Data Berhasil di Hapus');
    
    }
}
