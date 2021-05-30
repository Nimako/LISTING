<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Location;
use App\Models\Property;
use App\Models\Pricing;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;


class RoomController extends Controller
{
    
    public function Index($slug){

        if($data['location'] =  Location::where('slug',$slug)->first()):

            $data['list'] = Property::where('location_id',$data['location']->id)->get();

            return view("website/room/room_list", $data);
        else:
            return \Redirect("/");
        endif;

    }

    public function AddBooking(Request $request){

        $uuid = Str::uuid();
        $checkInOut = $request->checkIn;

        if(!empty($request->input('pricingID'))){
            foreach($request->input('pricingID') as $key => $value){
                $price = Pricing::where(['id'=>$value])->first();

                $additional_guest =  !empty($request->additional_guest)?count($request->additional_guest):null;

                Cart::create([
                    'created_by'       => null, 
                    'updated_by'       => null, 
                    'uuid'             => $uuid,
                    'property_id'      => $price->property_id,
                    'price'            => $price->price,
                    'guest'            => $price->guest,
                    'additional_guest' => $additional_guest,
                    'total'            => null,
                    'total_night'      => $request->NumNights,
                    'check_in'         => $request->checkIn,
                    'check_out'        => $request->checkOut,     
                ]);
            }
        }
        return \Redirect("checkOut/".$uuid);
    }


    public function checkOut($booking_id){

        $data['list'] = DB::table("v_carts")->where("uuid",$booking_id)->get();
        
        return view("website/room/checkout",$data);
    }





    

}
