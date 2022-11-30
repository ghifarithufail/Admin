<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Koord_kecamatan;

class Koord_desa extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_ad'];

    public function Koord_kecamatans(){
        return $this->belongsTo(Koord_kecamatan::class,'Koord_kecamatan_id','id');
    }
    
    public function data_relawan(){
        return $this->hasMany(Relawan::class,'Koord_desa_id','id');
    }

    public function Datakelurahans(){
        return $this->belongsTo(DataKelurahan::class,'kelurahan_id','id');

    }
}
