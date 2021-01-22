<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settstaff extends Model
{
    protected $fillable = ['id','nama_penilai','nama_ternilai','user_id','karyawan_id','id_approval','approval'];

    // public function Karyawan()
    // {
    //     return $this->hasMany(Karyawan::class);
    // }

    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan', 'karyawan_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    
}
