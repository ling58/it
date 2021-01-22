<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['id','level'];

    public function Newemploye()
    {
        return $this->hasMany(Newemploye::class);
    }

    public function Karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }
}
