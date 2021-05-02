<?php

namespace App\Http\Controllers;

//use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function Homepage(){        
        return view("website/homepage");
     }
}
