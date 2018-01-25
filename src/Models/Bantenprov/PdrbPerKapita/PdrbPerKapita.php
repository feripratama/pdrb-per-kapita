<?php

namespace Bantenprov\PdrbPerKapita\Models\Bantenprov\PdrbPerKapita;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PdrbPerKapita extends Model
{

    protected $table = 'pdrb_per_kapitas';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\PdrbPerKapita\Models\Bantenprov\PdrbPerKapita\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\PdrbPerKapita\Models\Bantenprov\PdrbPerKapita\Regency','id','regency_id');
    }

}

