<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = ['nama','nik','email','jabatan_id','direktorat_id','departement_id','duty_id','cuti','pt_id', 'user_id','level_id','masuk'];

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

    public function setting()
    {
        return $this->hasOne('App\Setting', 'karyawan_id');
    }

    public function level()
    {
        return $this->belongsTo('App\Level', 'level_id');
    }

    public function pt()
    {
        return $this->belongsTo('App\pt', 'pt_id');
    }


}
