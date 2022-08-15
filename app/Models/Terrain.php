<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\Image;
class Terrain extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsTo(Categorie::class);
    }
    public function images(){
        return $this->belongsToMany(Image::class);
    }
}
