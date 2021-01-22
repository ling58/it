<?php

namespace App\Http\Controllers;

use \App\User;
use \App\Duty;
use \App\Level;
use \App\Staff;
use \App\Posisi;
use \App\Jabatan;
use \App\Senstaff;
use \App\Direktorat;
use \App\Departement;
use Illuminate\Http\Request;


class KaryawanController extends Controller
{
    public function index(Request $request) {
        
        if($request->has('cari')){
        
            $data_karyawan = \App\Karyawan::where('nama','LIKE','%'.$request->cari.'%')->get();
        
        }else{
        
            $pt = \App\Pt::all();
            $duty = \App\Duty::all();
            $level = \App\Level::all();        
            $posisi = \App\Posisi::all();
            $jabatan = \App\Jabatan::all();
            $direktorat = \App\Direktorat::all();
            $departement = \App\Departement::all();
            $data_karyawan = \App\Karyawan::all();

        }
        
        // dd($data_karyawan);
        return view('karyawan.index',['pt' => $pt, 'data_karyawan' => $data_karyawan, 'direktorat' => $direktorat, 'departement' => $departement, 'duty' => $duty, 'jabatan' => $jabatan, 'level' => $level]);
    }

    public function create(Request $request) {
        
        // insert ke tabel user
        $user = new \App\User;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->jabatan_id = $request->jabatan_id;
        $user->level_id = $request->level_id;
        $user->password = bcrypt('martadinata520');
        $user->role = 'user';
        $user->remember_token = str_random(60);
        $user->save();
        
        // insert ke tabel karyawan 
        $request->request->add(['user_id' => $user->id]); 
        $karyawan = \App\Karyawan::create($request->all());
        
        
        
        return redirect('/karyawan')->with('success', 'Data Berhasil di input'); 
    }

    public function edit($id) {
    
        $karyawan = \App\Karyawan::find($id);
        $pt = \App\Pt::all();
        $duty = \App\Duty::all();
        $level = \App\Level::all();        
        $posisi = \App\Posisi::all();
        $jabatan = \App\Jabatan::all();
        $direktorat = \App\Direktorat::all();
        $departement = \App\Departement::all();
    
        return view('karyawan/edit', ['karyawan' => $karyawan,'direktorat' => $direktorat, 'departement' => $departement, 'duty' => $duty, 'jabatan' => $jabatan, 'pt' => $pt,'level' => $level]);
    
    }

    public function update(Request $request, $id) {
    
        $karyawan = \App\Karyawan::find($id);
    
        $karyawan->update($request->all());
    
        return redirect('/karyawan')->with('success', 'Data berhasil di update');
    
    }

    public function delete($id) {
    
        $karyawan = \App\Karyawan::find($id);

        $karyawan->delete();
    
        return redirect('/karyawan')->with('success', 'Data Berhasil di Hapus');
    
    }

    public function dashboarkaryawan()
    {
        $belum = \App\Senstaff::where('kehadiran', 0)->count();
        $sudah = \App\Senstaff::where('kehadiran', 1)->count();

    }

}
