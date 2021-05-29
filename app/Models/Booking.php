<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',  
        'created_by', 
        'updated_by', 
        'uuid',
        'property_id',
        'price',
        'guest',
        'total_night',
        'additional_guest',
        'total',
        'check_in',
        'check_out'
    ];

    // public function Property()
    // {
    //     return $this->belongsTo(Property::class,'property_id','');
    // }
}
