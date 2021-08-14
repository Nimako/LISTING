<?php

namespace App\Http\Controllers;

//use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Support\Str;

class HomePageController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function Homepage(){ 
        
        $data['list'] = Location::all();

        if(Property::count()>2){

            $data['rooms'] = Property::all()->random(3);

        }

        return view("website/homepage",$data);
    }

    public function shortStay(){    

        $data['list'] = Location::all();
        return view("website/shortStay", $data);
    }

    
    public function longStay(){        
        return view("website/longStay");
    }

    public function contactUs(){        
        return view("website/contactUs");
    }

    public function privacyPolicy(){        
        return view("website/contactUs");
    }

    public function termsConditions(){        
        return view("website/contactUs");
    }

    public function aboutUs(){        
        return view("website/contactUs");
    }
}
