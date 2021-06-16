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
        'cart_id',
        'order_no',
        'first_name',
        'last_name',
        'email',
        'contact_number',
        'country',
        'comment',
        'total'
    ];
}
