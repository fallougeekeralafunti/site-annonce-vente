<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Terrain;

class Categorie extends Model
{
    use HasFactory;
    public function terrains(){
        return $this->hasMany(Terrain::class);
    }
   
}
