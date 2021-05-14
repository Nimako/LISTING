<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;


    protected $fillable = [
        'status',  
        'created_by', 
        'updated_by', 
        'uuid',
        'location_id',
        'room_name',
        'summary_text',
        'serve_breakfast',
        'free_cancellation',
        //'languages_spoken',
        'total_guest_capacity',
        'total_bathrooms',
        'num_of_rooms',
        'bed_name',
        'featured_image',
        'images_paths',
        'amenities',
        'discount',
    ];
    
    public function Pricing()
    {
        return $this->hasMany(Pricing::class, 'property_id','id');
    }

    
}
