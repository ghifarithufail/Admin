<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelurahan extends Model
{
    use HasFactory;

    public function relawansData(){
        return $this->hasMany(Relawan::class,'kelurahan_id','id');
    }
}
