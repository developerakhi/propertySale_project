<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
class LocationType extends Model
{
    use HasFactory;
    
    public function location(){
        return $this->belongsTo(location::class);
    }
}
