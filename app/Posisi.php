<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    protected $fillable=['posisi'];

    public function Karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }
    
    public function Newemploye()
    {
        return $this->hasMany(Newemploye::class);
    }

    public function leave()
    {
        return $this->hasMany(Leave::class);
    }
}
