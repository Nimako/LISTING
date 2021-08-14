<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public static function GetAPTLocations(){

      $APTLocations = ["Cantoments","Labone","Airport"];

      return $APTLocations;
    }

}    

define('STORAGE_URL', '/storage/');
//define('STORAGE_URL', '/storage/app/public/');


/***********************************************
Status For Processing Data
/************************************************/
define('AWAITING_APPROVAL', 0);
define('VALIDATION_ERROR', 400);
define('SUCCESS', 200);
define('ERROR', 500);

##### Statuses #####
define('STATUS', array(
   'ACTIVE' => 1
));

# property status
define('PENDING_PROPERTY_APPROVAL', 2);
define('PROPERTY_IN_REVIEW', 3);
define('PUBLISHED_PROPERTY', 3);
define('DELETED_PROPERTY', 5);

define('PROPERTY_STATUSES', array(
   1 => 'Pending-Approval',
   2 => 'Pending-Approval',
   3 => 'Published',
   4 => 'Suspended',
   5 => 'Deleted'
));

define('BOOKING_STATUSES', array(
   1 => 'Pending-Payment',
   2 => 'Payment-Made',
   3 => 'Checked-In',
   4 => 'Cancelled',
));

define('BOOKING_STATUSES_COLOR', array(
   1 => 'primary',
   2 => 'success',
   3 => 'warning',
   4 => 'danger',
));

define('CART_STATUSES', array(
   1 => 'Pending',
   2 => 'Checked-In',
   3 => 'Cancelled',
   4 => 'Deleted',
));

#### Others ####
define('STRING_GLUE', '**');


define('APARTMENT', 1);
define('HOMES', 2);
define('HOTELS', 3);

#### Reservation ####
define('YES', 1);
define('NO', 0);

define('PENDING', 1);
define('CANCELLED', 2);
define('RESCHEDULED', 3);
define('BOOKING_FULFILLED', 4);


