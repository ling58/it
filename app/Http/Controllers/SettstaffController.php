<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Karyawan;

class SettstaffController extends Controller
{
    public function settingstaff()
    {
        $setting = \App\Settstaff::all();
        $user = DB::table('users')->orderBy('name','asc')->get();

        $karyawan = DB::table('karyawans')->orderBy('nama','asc')->get();
        // dd($setting);

        return view('setting.staff',['user'=> $user, 'setting' => $setting, 'karyawan' => $karyawan]);

    }

    public function new(Request $request)
    {
        // $setting = new \App\Setting;
        // $setting->id_penilai = $request->id_penilai;
        // $setting->nama_penilai = $request->nama_penilai;

        $staff = \App\Settstaff::create($request->all());

        // $setting = \App\Settstaff::create($request->all());

        return redirect('setting/staff'); 
    }

    public function hapus($id) {
    
        $setting = \App\Settstaff::find($id);

        $setting->delete();
    
        return redirect('/setting/staff')->with('success', 'Data Berhasil di Hapus');
    
    }

}
