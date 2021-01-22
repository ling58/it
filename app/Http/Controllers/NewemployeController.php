<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Departement;
use App\Level;
use App\User;
use App\Direktorat;

class NewemployeController extends Controller
{
    public function index()
    {
        $departement = Departement::all();
        return view('nemploye.index');
    }

    public function create(Request $request)
    {
        $newemploye = \App\Newemploye::create($request->all());

        return redirect('/nemploye')->with('success', 'Data Berhasil di input'); 


    }

    public function store()
    {
        Newemploye::create([
            'pt' => $request->pt,
            'nomor' => $request->nomor,
            'pengajuan' => $request->pengajuan,
            'direktorat' => $request->direktorat,
            'departement' => $request->departement,
            'penempatan' => $request->penempatan,
            'jabatan' => $request->jabatan,
            'golongan' => $request->golongan,
            'posisi' => $request->posisi,
            'resign' => $request->resign,
            'pensiun' => $request->pensiun,
            'meninggal' => $request->meninggal,
            'phk' => $request->phk,
            'lain' => $request->lain,
            'penjelasan' => $request->penjelasan,
            'uraian' => $request->uraian,
            'edu1' => $request->edu1,
            'edu2' => $request->edu2,
            'edu3' => $request->edu3,
            'edu4' => $request->edu4,
            'edu5' => $request->edu5,
            'keahlian' => $request->keahlian,
            'pengalaman' => $request->pengalaman,
            'kebutuhan' => $request->kebutuhan,
            'jeskel1' => $request->jeskel1,
            'jeskel2' => $request->jeskel2,
            'fisik' => $request->fisik,
            'catatan' => $request->catatan,
            'masuk' => $request->masuk
            
        ]);
        
        
        

    }

    public function pengajuan()
    {
        $pt = \App\Pt::all();
        $duty = \App\Duty::all();
        $posisi = \App\Posisi::all();
        $jabatan = \App\Jabatan::all();
        $direktorat = \App\Direktorat::all();
        $departement = \App\Departement::all();
        

        return view('nemploye.pengajuan',['jabatan' => $jabatan, 'direktorat' => $direktorat, 'pt' => $pt, 'departement' => $departement, 'duty' => $duty, 'posisi' => $posisi]);
    }
}
