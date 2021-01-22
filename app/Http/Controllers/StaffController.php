<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use \App\Pt;
use \App\User;
use \App\Duty;
use \App\Staff;
use \App\Posisi;
use \App\Setting;
use \App\Jabatan;
use \App\Karyawan;
use \App\Direktorat;
use \App\Departement;


class StaffController extends Controller
{
    public function laporanstaff(Request $request)
    {
        $penilai_id = Auth::user()->id;
        $hasil = \App\Staff::all();
        
                    
        $data = DB::select("SELECT * FROM karyawans WHERE id IN (SELECT karyawan_id FROM settings WHERE user_id ='$penilai_id') AND id NOT IN (SELECT karyawan_id FROM staff WHERE user_id = '$penilai_id')");
            // dd($data);
        return view('penilaian.laporanstaff',['hasil' => $hasil, 'data' => $data]);
    }

    public function staff($id)
    {
            $data = \App\Karyawan::find($id);
            // $data = DB::table('karyawans')->where('id', '=', ($id));
            $a = \App\karyawan::all();
            // dd($karyawan);
            return view('penilaian/staff', ['data' => $data,]);
        
    }

    public function create(REQUEST $request)
    {
        $senstaff = \App\Staff::create($request->all());

        
        return redirect ('/penilaian/laporanstaff');
    }

    public function detail($id)
    {
        $detail = \App\Staff::find($id);

        return view('/penilaian/detail_staff',['detail' => $detail]);
    }

    public function absenstaff()
    {
        $kehadiran = DB::table('staff')->where('kehadiran', '=' ,'0')->get();

        return view('penilaian/absenstaff',['kehadiran' => $kehadiran]);
    }
}
