<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['id','nama_penilai','nama_ternilai','user_id','karyawan_id','id_approval','approval'];

    // public function Karyawan()
    // {
    //     return $this->hasMany(Karyawan::class);
    // }

    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
}
