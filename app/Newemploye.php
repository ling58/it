<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newemploye extends Model
{
    protected $fillable = ['id','pt_id','nomor','pengajuan','direktorat_id','duty_id','departement_id','posisi_id','jabatan_id','kebutuhan','perencanaan','resign','pensiun','meninggal','phk','lain','uraian','edu1','edu2','edu3','edu4','edu5','keahlian','pengalaman','usia','jeskel1','jeskel2','fisik','catatan'];

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

    public function level()
    {
        return $this->belongsTo('App\Level', 'level_id');
    }

    public function pt()
    {
        return $this->belongsTo('App\Pt', 'pt_id');
    }
}
