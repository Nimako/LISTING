<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Property;
use App\Models\Location;
use App\Models\Booking;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function Index(){

        $data['list'] = DB::table('v_booking')->get();
        
        return view("admin/booking/index", $data);
    }



    public function Detail($id){
        
        if($data['room'] = DB::table('v_booking')->where("uuid",$id)->first()){
            
          $data['rooms'] = DB::table('v_carts')->where("uuid",$data['room']->cart_id)->get();

          return view("admin/booking/detail",$data);
            
        }else{
            return \redirect()->back();
        }
    }


    


}
