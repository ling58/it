<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leave = \App\Leave::all();
        return view('leave.index',['leave' => $leave]);
        return view('leave.index');
    }

    // ajax
    public function getLeave(Request $request){
        $search = $request->search;

        if($search == ''){
            $leave = Leave::orderby('nama','asc')->select('id','nama')->limit(6)->get();
        }else{
            $leave = Leave::orderby('nama','asc')->select('id','nama')->where('nama', 'like', '%'.$search.'%')->limit(6)->get();
        }

        $response = array();
        foreach($leave as $leave){
            $response[] = array("value"=>$leave->id, "label"=>$leave->nama);
        }

        echo json_encode($response);
        exit;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    
    public function create(Request $request)
    {
        $leave = \App\Leave::create($request->all());
        return redirect('/leave')->with('success', 'Data Berhasil di input'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave $leave)
    {
        //
    }
    
    public function pengajuan()
    {
        $pt = \App\Pt::all();
        $duty = \App\Duty::all();
        $posisi = \App\Posisi::all();
        $jabatan = \App\Jabatan::all();
        $direktorat = \App\Direktorat::all();
        $departement = \App\Departement::all();
        $data_karyawan = \App\Karyawan::all();

        return view ('leave.pengajuan', ['pt' => $pt, 'data_karyawan' => $data_karyawan, 'direktorat' => $direktorat, 'departement' => $departement, 'duty' => $duty, 'jabatan' => $jabatan,]);
    }

    public function laporan()
    {
        $pt = \App\Pt::all();
        $duty = \App\Duty::all();
        $posisi = \App\Posisi::all();
        $leave = \App\Leave::all();
        $jabatan = \App\Jabatan::all();
        $direktorat = \App\Direktorat::all();
        $departement = \App\Departement::all();
        $data_karyawan = \App\Karyawan::all();


        return view ('leave.laporan', ['pt' => $pt, 'data_karyawan' => $data_karyawan, 'direktorat' => $direktorat, 'departement' => $departement, 'duty' => $duty, 'jabatan' => $jabatan, 'leave' => $leave]);
    }

    public function autocomplete(Request $request)
    {
        $pencarian = $request->get('term');

        $hasil = Leave::where('nama', 'LIKE', '%'.$pencarian.'%')->get();

        return response()->json($hasil);

    }

    public function cuti()
    {
        $cuti = \App\Leave::all();

        return view('leave.cuti', ['cuti' => $cuti]);
    }

}
