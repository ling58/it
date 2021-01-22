<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    protected $fillable=['duty'];

    public function Karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }

    public function Newemploye()
    {
        return $this->hasMany(Newemploye::class);
    }
}
