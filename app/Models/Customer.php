<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'uuid',
        "firstName",
        "middleName",
        "surname",
        "dob",
        'gender',
        "birthCity",
        "birthCountry",
        "nationality",
        "countryCode",

        "addressLine1",
        "addressLine2",
        "city",
        "postcode",
        "region",
        "countryResidence",
        "phoneNum",
        "homeNumber",
        "alternativeEmail",

        "occupation",
        "companyName",

        'email',
        'password',

        'idType',
        'idNumber',
        'idIssueDate',
        'idExpireDate',
        'idIFile',

        'addressDocType',
        'addressDocIssueDate',
        'addressDocExpireDate',
        'addressFile',

        'proofFundDocType',
        'proofFundDocIssueDate',
        'proofFundDocExpireDate',
        'proofFundFile',
        
        'created_at',
        'updated_at',

        'keyCode'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
