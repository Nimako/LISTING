<?php

namespace App\Http\Controllers;

//use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data['total_locations'] = DB::table("apartment_locations")->count();
        $data['total_booking'] = DB::table("bookings")->count();

        
        return view("admin/dashboard",$data);
     }
}
