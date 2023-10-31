<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Category;
use App\Models\Size;
use App\Models\LocationType;

class Property extends Model
{
    use HasFactory;
    // protected $fillable = ['category_id ','location_id ','size_id ','location_type_id ','title','description','size','bed','bath','drawing','dining','kitchen','facilities','price','vedio_links','thumb_image','property_banner','image'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function size_s(){
        return $this->belongsTo(Size::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }
    
    public function locationType(){
        return $this->belongsTo(LocationType::class);
    }
}
