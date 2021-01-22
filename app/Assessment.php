<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = 
    [
        'bulan',
        'tahun',
        'ks1',
        'ks2',
        'ks3',
        'ks4',
        'ks5',
        'ks6',
        'ks7',
        'ks8',
        'ks9',
        'ks10',
        'ks11',
        'ks12',
        'ks13',
        'ks14',
        'ks15',
        'ks16',
        'ks17',
        'km1',
        'km2',
        'km3',
        'km4',
        'km5',
        'km6',
        'km7',
        'km8',
        'km9',
        'km10',
        'km11',
        'km12',
        'km13',
        'km14',
        'km15',
        'km16',
        'km17',
        'komentar',

    ];

    protected $hidden = 
    [
        'id_ternilai',
        'id_penilai',
        'nama_ternilai',
        'nama_penilai',
        'approve',
    ];
}
