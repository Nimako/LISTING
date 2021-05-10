<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Property;
use App\Models\Location;
use App\Models\Amenity;
use App\Models\Pricing;

class ApartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function Index($id){

        if($data['location'] = Location::where("uuid",$id)->first()){

          $data['list'] = Property::where("location_id",$data['location']->id)->get();
          
          return view("admin/apartment/index", $data);

       }else{
           return \Redirect("admin-location/index");
       }
    }


    public function Create($location_id){
        
        if($data['location'] = Location::where("uuid",$location_id)->first()){
        
          $data['amenities'] = Amenity::all();

          return view("admin/apartment/create",$data);

        }else{
            return \Redirect("admin-location/index");
        }
    }

    public function Detail($id){
        
        if($data['room'] = Property::where("uuid",$id)->first()){
        
          $data['amenities'] = Amenity::all();

          return view("admin/apartment/edit",$data);

        }else{
            return \Redirect("admin-location/index");
        }
    }


    public function Store(Request $request)
    {
       

        $validator = Validator::make($request->all(), [
            'location_id' => 'required',
            'room_name'   => 'required',
        ]);

        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        }

        $query = Property::create([
            'uuid'                  => Str::uuid(),
            'location_id'           => $request->input("location_id"),
            'room_name'             => $request->input("room_name"),
            'summary_text'          => $request->input("summary_text"),
            'free_cancellation'     => $request->input("free_cancellation"),
            'total_guest_capacity'  => $request->input("total_guest_capacity"),
            'total_bathrooms'       => $request->input("total_bathrooms"),
            'bed_name'             => json_encode($request->bed_name),
            'num_of_rooms'          => $request->input("num_of_rooms"),
            'amenities'             => json_encode($request->amenities),
            'status'                => 1,
            'created_by'            => Auth()->User()->id,
          ]);

        $lastID = $query->id;
        if(!empty($lastID)){

            if(!empty($request->price)){
                foreach($request->price as $key => $value){
                    Pricing::create(['property_id'=>$lastID,'guest'=>$request->guest[$key],'price'=>$value]);
                }
            }

        
            $featured_imagePath = "";
            $imagesPaths    = [];

            $BasePath = "location/".str_replace(' ', '_', strtolower($request->location_name))."/".str_replace(' ', '_', strtolower($request->room_name));

            if ($request->hasfile('featured_image')) {
                $image = $request->file('featured_image');
                $filename = 'featured.'.$image->extension();  
                $path = $image->storeAs($BasePath, $filename, 'public');
                $featured_imagePath = $path;
            }


            if ($request->hasfile('images_paths')) {
                $images_paths = $request->file('images_paths');
                $x=1;
                foreach($images_paths as $image) {
                    $filename = $x.'_'.date("ymdhis").mt_rand(1111,2222).".".$image->extension();  
                    $path = $image->storeAs($BasePath, $filename, 'public');
                    $imagesPaths[] = $path;
                    $x++;
                }
            }
            
            Property::where(['id'=>$lastID])->update([
                'featured_image'   => $featured_imagePath,
                'images_paths'     => json_encode($imagesPaths)
            ]);

        return back()->with('success', 'Property saved successfully');

       }else{
          return back()->with('success', 'Property failed to upload');
       }

    }



    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'location_id' => 'required',
            'room_name' => 'required',
        ]);

        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        }

        $postData=[
            'room_name'             => $request->input("room_name"),
            'summary_text'          => $request->input("summary_text"),
            'free_cancellation'     => $request->input("free_cancellation"),
            'total_guest_capacity'  => $request->input("total_guest_capacity"),
            'total_bathrooms'       => $request->input("total_bathrooms"),
            'bed_name'             => json_encode($request->bed_name),
            'num_of_rooms'          => $request->input("num_of_rooms"),
            'amenities'             => json_encode($request->amenities),
            //'status'                => 1,
            'updated_by'            => Auth()->User()->id,
          ];

   
        
            $featured_imagePath = "";
            $imagesPaths    = [];

            $uuid = $request->input('id');
            $result =  Property::where(["uuid"=>$uuid])->first();

            $BasePath = "location/".str_replace(' ', '_', strtolower($request->location_name))."/".str_replace(' ', '_', strtolower($request->room_name));

            if ($request->hasfile('featured_image')) {
                $image = $request->file('featured_image');
                $filename = 'featured.'.$image->extension();  
                $path = $image->storeAs($BasePath, $filename, 'public');
                $postData['featured_image'] = $path;
            }


            if ($request->hasfile('images_paths')) {

                $imagesPaths = json_decode($result->images_paths, true);

                $images_paths = $request->file('images_paths');
                $x=1;
                foreach($images_paths as $image) {
                    $filename = $x.'_'.date("ymdhis").mt_rand(1111,2222).".".$image->extension();  
                    $path = $image->storeAs($BasePath, $filename, 'public');
                    $imagesPaths[] = $path;
                    $x++;
                }
                $postData['images_paths'] = json_encode($imagesPaths);
            }
            
        if(Property::where(['id'=>$lastID])->update($postData)){

            return back()->with('success', 'Property saved successfully');

        }else{
          return back()->with('success', 'Property failed to upload');
       
        }

    }

 



}
