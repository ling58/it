<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pt extends Model
{
    protected $fillable = ['pt'];

    public function Karyawan()
    {
        return $this->hasMany(Karyawan::class);
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
