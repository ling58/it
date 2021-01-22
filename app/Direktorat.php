<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direktorat extends Model
{
    
    protected $fillable=['direktorat'];

    public function Karyawan()
    {
        return $this->hasOne('App\Karyawan');
    }

    public function Newemploye()
    {
        return $this->hasMany(Newemploye::class);
    }

    public function Leave()
    {
        return $this->hasMany(Leave::class);
    }
}
