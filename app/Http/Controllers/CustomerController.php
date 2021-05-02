<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Index(){
       
        $data['list'] = Customer::all();
 
        return view("customer/index", $data);
    }


    public function Detail($id){
       
        $data['info'] = Customer::where(["uuid"=>$id])->first();

        return view("customer/details", $data);
    }
}
