<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LocationType;
class Location extends Model
{
    use HasFactory;
    
    
    public function locationType(){
        return $this->belongsTo(LocationType::class);
    }
    
}
