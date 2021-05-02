<?php

namespace App\Http\Controllers;

//use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function Homepage(){

        $data['location'] = DB::table("apartment_locations")->select('location','slug')->get();
        
        return view("website/homepage", $data);
     }
}
