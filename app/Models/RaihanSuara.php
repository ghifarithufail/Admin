<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaihanSuara extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kelurahans(){
        return $this->belongsTo(DataKelurahan::class,'kelurahan_id','id');
    }
    
    public function datarelawans(){
        return $this->hasMany(Relawan::class,'kelurahan_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
