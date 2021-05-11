<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Property;


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
    

}
