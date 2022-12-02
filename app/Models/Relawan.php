<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $date = ['created_at'];

    public function Koord_desas(){
        return $this->belongsTo(Koord_desa::class,'Koord_desa_id','id');
    }


    public function Datakelurahans(){
        return $this->belongsTo(DataKelurahan::class,'kelurahan_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
