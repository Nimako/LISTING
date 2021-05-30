<?php

namespace App\Http\Controllers;

//use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Location;

class HomePageController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function Homepage(){ 
        
        $data['list'] = Location::all();

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
}
