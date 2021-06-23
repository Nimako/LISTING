<?php

namespace App\Http\Controllers;

use App\Mail\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Location;
use App\Models\Property;
use App\Models\Pricing;
use App\Models\Cart;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


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

    public function AddToCart(Request $request){

        $uuid = Str::uuid();
        $checkInOut = $request->checkIn;

        if(!empty($request->input('pricingID'))){
            foreach($request->input('pricingID') as $key => $value){
                $price = Pricing::where(['id'=>$value])->first();

                Cart::create([
                    'created_by'       => null, 
                    'updated_by'       => null, 
                    'uuid'             => $uuid,
                    'property_id'      => $price->property_id,
                    'price'            => $price->price,
                    'guest'            => $price->guest,
                    'total'            => null,
                    'total_night'      => $request->NumNights,
                    'check_in'         => $request->checkIn,
                    'check_out'        => $request->checkOut,     
                ]);
            }

            if(!empty($request->additional_guest)){    
                foreach($request->input('additional_guest') as $key => $value){
                    Cart::where(['uuid'=>$uuid,'property_id'=>$value])->update(['additional_guest' => count($request->additional_guest)]);
                }
            }
        }
        
        return \Redirect("checkOut/".$uuid);
    }


    public function checkOut($booking_id){

        $data['list'] = DB::table("v_carts")->where("uuid",$booking_id)->get();
        
        return view("website/room/checkout",$data);
    }


    //Get room images
    public function GetRoomImages(Request $request){ 

        $data["info"] = Property::where('id', $request->roomID)->first();

        return view("website/room/ImagePreview",$data);
    }


    //**************** TRANSACTION*************************** */


    public function AddBooking(Request $request){ 

        $validator = Validator::make($request->all(), [
            'first_name' => 'bail|required',
            'last_name'  => 'bail|required',
            'contact_number'  => 'bail|required',
            'email'      => 'bail|required|email',
            'email_repeat'      => 'bail|required|email',
            'contact_number' => 'bail|required',
        ]);

        if ($validator->fails()) {  
            return ['statusCode'=>500, 'message'=>$validator->errors()->first()];
        }

        if($request->email != $request->email_repeat){
            return ['statusCode'=>500, 'message'=>'Email and second email is not correct'];
        }

        $uuid = Str::uuid();
        $order_no = mt_rand(1000000, 9999999).time();
  
        $query = Booking::create([
                'created_by'       => null, 
                'updated_by'       => null, 
                'uuid'             => $uuid,
                'cart_id'          => $request->cart_id,
                'order_no'         => $order_no,
                'first_name'       => $request->first_name,
                'last_name'        => $request->last_name,
                'email'            => $request->email,
                'contact_number'   => $request->contact_number,
                'country'          => $request->country,
                'comment'          => $request->comment,
                'total'            => $request->GrandTotal
            ]);

            if($query){
                return ["statusCode"=>200, "orderNumber" => $order_no];
            }else{
                return ["statusCode"=>500];
            }  
      }


    public function VerifyTransaction(Request $request){ 

        $reference =  $request->query("reference");
        $BookingData = Booking::where("order_no",$reference)->first();

        if(!empty($BookingData)){

            $query = Booking::where("order_no",$reference)->update(['status'=>2]);

            $CartData = DB::table("v_carts")->where("uuid",$BookingData->cart_id)->first();
            Cart::where("uuid",$BookingData->cart_id)->update(['status'=>2]);

            $bookingDate  = date('d F Y', strtotime($CartData->created_at));
            $checkInData  = date('d F Y', strtotime($CartData->check_in));
            $checkOutData = date('d F Y', strtotime($CartData->check_out));

              $order = [
                    'body'  => "This email is to confirm your booking on <b>[$bookingDate]</b> for a <b>$CartData->room_name</b> for  <b>$CartData->total_night</b> nights at the [$CartData->location] apartment. The check-in date share be on <b>[$checkInData]</b> and check-out date shall be on <b>[$checkOutData]</b>.<br><br> Further details of your booking are listed below:",
                    'BookingDate'  => $bookingDate,
                    'CheckIn'      => $checkInData,
                    'CheckOut'     => $checkOutData,
                    'Location'     => $CartData->location,
                    'NumberGuest'  => $CartData->guest + $CartData->additional_guest,
                    'Room_type'    => $CartData->room_name,
                    //'Amenities'      => "",
                    'Order_Number' => $reference,
                    'Amenities'    => json_decode($CartData->amenities),
                    'Total_Amount' => $BookingData->total,
                    'Status'       => "PAYED",
                    'footer'       => "If you have any inquiries, please do not hesitate to contact us or call staylug directly. <br> We are looking forward to your visit and hope that you enjoy your stay. <br> Best Regards",
                ];

                if($BookingData->status==1){
                  @Mail::to($BookingData->email)->bcc('gyasinimako.gh@hotmail.com')->send(new Order($order));
                }

                $data['order'] = $order;
                return  view('website/room/bookingSuccessPage', $data);
        }
    }





    

}
