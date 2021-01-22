<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = ['departement'];

    public function newemploye()
    {
        return $this->hasMany(Newemploye::class);
    }

    public function Karyawan()
    {
        return $this->hasMany('App\Karyawan');
    }

    public function Leave()
    {
        return $this->hasMany(Leave::class);
    }

}
