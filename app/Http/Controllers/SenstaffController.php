<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use \App\Pt;
use \App\User;
use \App\Duty;
use \App\Posisi;
use \App\Setting;
use \App\Jabatan;
use \App\Karyawan;
use \App\Senstaff;
use \App\Direktorat;
use \App\Departement;

use Illuminate\Http\Request;

class SenstaffController extends Controller
{
    //
    public function index()
    {
        return view('penilaian.index');
    }
    
    public function laporansenstaff(Request $request)
    {
        $penilai_id = Auth::user()->id;
        $hasil = DB::select("select * from senstaffs where user_id='$penilai_id'");
        // $approval = DB::select("SELECT * FROM senstaffs WHERE karyawan_id IN (SELECT karyawan_id FROM settings WHERE id_approval='$penilai_id'");
        
                    
        $data = DB::select("SELECT * FROM karyawans WHERE id IN (SELECT karyawan_id FROM settings WHERE user_id ='$penilai_id') AND id NOT IN (SELECT karyawan_id FROM senstaffs WHERE user_id = '$penilai_id')");
            // dd($data);
        return view('penilaian.laporansenstaff',['hasil' => $hasil, 'data' => $data]);
    }

    public function seniorstaff(Request $request)
    {   
        $pt = \App\Pt::all();
        $duty = \App\Duty::all();
        $posisi = \App\Posisi::all();
        $jabatan = \App\Jabatan::all();
        $direktorat = \App\Direktorat::all();
        $departement = \App\Departement::all();
        $data_karyawan = \App\Karyawan::all();

        return view('penilaian.senstaff',['data_karyawan' => $data_karyawan]);
    }

    public function tambah(REQUEST $request)
    {
        $senstaff = \App\Senstaff::create($request->all());

        
        return redirect ('/penilaian/senstaff');
    }

    public function approve($id)
    {
        $id_approve = \Auth::user()->id;
        $persetujuan = DB::Select("SELECT * FROM senstaffs WHERE karyawan_id IN (SELECT karyawan_id FROM settings WHERE id_approval='$id_approve')");
        $senstaff = \App\Senstaff::find($id);
        $karyawan = \App\Senstaff::all();

        // dd($senstaff);
        return view('penilaian/approvesenstaff', ['senstaff' => $senstaff]);
    }

    public function senstaff($id)
    {
            $data = \App\Karyawan::find($id);
            // $data = DB::table('karyawans')->where('id', '=', ($id));
            $a = \App\karyawan::all();
            // dd($karyawan);
            return view('penilaian/senstaff', ['data' => $data,]);
        
    }

    public function detail($id)
    {
        $detail = \App\Senstaff::find($id);

        return view('penilaian/detail', ['detail' =>$detail]);
    }

    public function delete($id)
    {
        $delete = \App\Senstaff::find($id);

        $delete->delete();

        return redirect('penilaian/laporansenstaff')->with('success','Data berhasil di hapus');
    }

    public function list()
    {
        $id_approve = Auth::user()->id;
        $persetujuan = DB::Select("SELECT * FROM senstaffs WHERE karyawan_id IN (SELECT karyawan_id FROM settings WHERE id_approval='$id_approve')AND STATUS='menunggu'");

        $status = DB::select("select * from senstaffs where status='approve'");

        // dd($persetujuan);
        return view('penilaian/listapprove',['persetujuan' => $persetujuan,'status'=>$status]);

    }

    public function update(Request $request, $id)
    {
        $persetujuan = \App\Senstaff::find($id);
        $persetujuan->update($request->all());

        return redirect ('/penilaian/listapprove');
    }


}
