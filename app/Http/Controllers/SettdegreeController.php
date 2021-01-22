<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Karyawan;

class SettdegreeController extends Controller
{
    public function settingdegree()
    {
        $setting = \App\Settdegree::all();
        $user = DB::table('users')->orderBy('name','asc')->get();

        $karyawan = DB::table('karyawans')->orderBy('nama','asc')->get();

        // dd($setting);

        return view('setting.degree',['user'=> $user, 'setting' => $setting, 'karyawan' => $karyawan]);

    }

    public function tambah(Request $request)
    {
        // $setting = new \App\Setting;
        // $setting->id_penilai = $request->id_penilai;
        // $setting->nama_penilai = $request->nama_penilai;

        $setting = \App\Settdegree::create($request->all());

        return redirect('setting/degree'); 
    }


    public function hapus($id) {
    
        $setting = \App\Settdegree::find($id);

        $setting->delete();
    
        return redirect('/setting/degree')->with('success', 'Data Berhasil di Hapus');
    
    }
}
