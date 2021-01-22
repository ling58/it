<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable=['jabatan'];

    public function Karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }

    public function Newemploye()
    {
        return $this->hasMany(Newemploye::class);
    }
}
