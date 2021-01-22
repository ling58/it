<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Karyawan;

class SettingController extends Controller
{
    public function settingsenstaff()
    {
        $setting = \App\Setting::all();
        $user = DB::table('users')->orderBy('name','asc')->get();

        $karyawan = DB::table('karyawans')->orderBy('nama','asc')->get();

        // dd($setting);

        return view('setting.senstaff',['user'=> $user, 'setting' => $setting, 'karyawan' => $karyawan]);

    }

    public function create(Request $request)
    {
        // $setting = new \App\Setting;
        // $setting->id_penilai = $request->id_penilai;
        // $setting->nama_penilai = $request->nama_penilai;

        $setting = \App\Setting::create($request->all());

        return redirect('setting/senstaff'); 
    }

    public function delete($id) {
    
        $setting = \App\Setting::find($id);

        $setting->delete();
    
        return redirect('/setting/senstaff')->with('success', 'Data Berhasil di Hapus');
    
    }


}
