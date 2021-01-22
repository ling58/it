<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use \App\Pt;
use \App\Duty;
use \App\Posisi;
use \App\Jabatan;
use \App\Karyawan;
use \App\Direktorat;
use \App\Setting;
use \App\Departement;


class DegreeController extends Controller
{
    public function laporandegree(Request $request)
    {
        $penilai_id = Auth::user()->id;
        $hasil = DB::select("select * from degrees where user_id='$penilai_id'");

        $data = DB::select("SELECT * FROM karyawans WHERE id IN (SELECT karyawan_id FROM settdegrees WHERE user_id ='$penilai_id') AND id NOT IN (SELECT karyawan_id FROM degrees WHERE user_id = '$penilai_id')");
        


        // dd($hasil);
        return view('penilaian.laporandegree',['data' => $data,'hasil' => $hasil]);
    }

    public function degree($id)
    {
        $data = \App\Karyawan::find($id);
        $a = \App\karyawan::all();
        
        // dd($a);
        return view('penilaian/degree', ['data' => $data,]);
    }

    public function input(REQUEST $request)
    {
        $degree = \App\Degree::create($request->all());

        return redirect ('/penilaian/degree');


    }

    public function detail($id)
    {
        $detail = \App\Degree::find($id);

        return view('penilaian/detail_degree',['detail' => $detail]);
    }

    public function hapus($id)
    {
        $hapus = \App\Degree::find($id);

        $hapus->delete();

        return redirect('penilaian/laporandegree')->with('success','Data berhasil di hapus');

    }


}
