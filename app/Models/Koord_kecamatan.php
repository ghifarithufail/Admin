<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koord_kecamatan extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $date = ['created_at'];

    public function desas(){
        return $this->hasMany(Koord_desa::class,'Koord_kecamatan_id','id');
    }


    public function relawans(){
        return $this->hasManyThrough(Relawan::class, Koord_desa::class);
    }

    
}
