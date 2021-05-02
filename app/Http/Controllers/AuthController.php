<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth',["except"=>"index"]);
    }

    public function index()
    {
        return view('admin/login');
    }

    public function registration()
    {
        if (Auth::check()) {

            $data['list'] = User::where('Status', '<>', "DELETED")->get();
            $data['showroom'] = DB::table("showroom")->get();

            return view('admin/registration',$data);
        }
        return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
    
    public function postLogin(Request $request)
    {
        request()->validate([
            'username'  => 'required',
            'password'  => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
         
            return redirect()->action([DashboardController::class, 'index']);

          }

        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }


    public function postRegistration(Request $request)
    {
       request()->validate([
            'fullName'     => 'required',
            'email'        => 'email|unique:admin_user',
            'username'     => 'required|unique:admin_user',
            'password'     => 'required|min:6',
        ]);

        $result = User::create([
            [
                'uuid'         => Str::uuid(),
                'fullName'     => $request->input('fullname'),
                'email'        => $request->input('email'),
                'username'     => $request->input('username'),
                'password'     => $request->input('password'),
            ]
        ]);

        return Redirect::to("registration")->withSuccess('User created');
    }


    public function dashboard()
    {
        if (Auth::check()){  
            
            return view('admin/dashboard',$data);
       }
        return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }


    public function create(array $data)
    {
        return User::create([
            'fullname'           => $data['fullname'],
            'email'              => $data['email'],
            'username'           => $data['username'],
            'password'           => Hash::make($data['password']),
        ]);
    }

    public function editUser($id)
    {
        $data = [];
        $data['list'] = User::where('Status', '<>', "DELETED")->get();

        $data['info'] = User::where(['id' => $id])->first();

        return view('admin/registration', $data);
    }

    
    public function updateRegistration(Request $request)
    {
        $data = [
                'fullname'         => $request->fullname,
                'email'             => $request->email,
                'username'          => $request->username,
        ];

        if(!empty($request->password)){
            $data['password'] = Hash::make($request->password);
        }

        $id =  $request->user_id;
        $affected = User::where('id', $id)->update($data);

        if ($affected) {
            return Redirect::to("registration")->withSuccess('User Update Successfully');
        }else{
            return Redirect::to("registration");
        }
    }


    

    public function deleteRegistration($id){

        $affected = DB::where('id', $id)->update(['Status'=>'DELETED']);

        if ($affected) {
            return Redirect::to("registration");   
        }
    }



    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }



    public function SetShowRoomSession($ShowRoomID){

       session(['SessionShowRoomID' => $ShowRoomID]);
       return Redirect::back()->withErrors(['msg', 'The Message']);
       
    }



}
