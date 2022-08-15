<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    use HasFactory;
    use HasFactory;
    public function categories(){
        return $this->belongsTo(Categorie::class);
    }
    public function images(){
        return $this->belongsToMany(Image::class);
    }
}
