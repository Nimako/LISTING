<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = "apartment_locations";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'uuid',
        "slug",
        "apartmentName",
        "location",
        "Heading",
        'description',
        "thingToDo",
        "bannerImage",
        "locationImages",
        "attractionImages",
        "thumbnailOne",
        "thumbnailTwo",
        
        'created_at',
        'updated_at'
    ];

}
