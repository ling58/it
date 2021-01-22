<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    //
    protected $fillable = ['id','nama','nik','jabatan_id','direktorat_id','departement_id','duty_id','alasan','alamat','hubungi','namapeng','nikpeng','jabatanpeng_id','masuk','cutiambil','cutisisa','cutimulai','cutisampai','masukkembali','pt_id','status','user'];

    public function direktorat()
    {
        return $this->belongsTo('App\Direktorat', 'direktorat_id');
    }
    
    public function departement()
    {
        return $this->belongsTo('App\Departement', 'departement_id');
    }

    public function jabatan()
    {
        return $this->belongsTo('App\Jabatan', 'jabatan_id');
    }

    public function duty()
    {
        return $this->belongsTo('App\Duty', 'duty_id');
    }

    public function pt()
    {
        return $this->belongsTo('App\Pt', 'pt_id');
    }
}
