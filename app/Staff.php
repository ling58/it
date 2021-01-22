<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['id',
                            'p1',
                            'p2',
                            'p3',
                            'p4',
                            'p5',
                            'p6',
                            'p7',
                            'p8',
                            'p9',
                            'p10',
                            'p11',
                            'p12',
                            'p13',
                            'kekuatan',
                            'kelemahan',
                            'rencana',
                            'nama',
                            'jabatan',
                            'nik',
                            'departement',
                            'user_id',
                            'karyawan_id',
                            'status',
                            'penilai',
                            ];

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
}
