<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatFilm extends Model
{
    use HasFactory;
    protected $table = "alat_film";
    protected $guarded = [''];
    public function category()
    {
        return $this->belongsTo(Categories::class, 'categories_id', 'id');
    }
}
