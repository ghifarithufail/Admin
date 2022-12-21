<?php

namespace App\Models\FrontEnd;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $fillable = [
        'judul', 'slug', 'kategori_id', 'user_id', 'gambar_artikel', 'is_active', 'views', 'body'
    ];

    protected $hidden = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function yaya()
    {
        return DB::table('artikel')->latest('created_at')->first();
    }
}
