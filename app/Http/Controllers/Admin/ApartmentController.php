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

          $data['pricing'] = Pricing::where("property_id", $data['room']->id)->get();
        
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
            'bed_name'             => !empty($request->bed_name)?json_encode($request->bed_name):null,
            'num_of_rooms'          => $request->input("num_of_rooms"),
            'amenities'             => !empty($request->amenities)?json_encode($request->amenities):null,
            'additional_guest'      => $request->input("addition_guest") > 0 ?$request->input("addition_guest")."****".$request->input("addition_guest_price"):null,
            'discount'              => $request->input('discount'),
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
            'num_of_rooms'          => $request->input("num_of_rooms"),
            'additional_guest'      => $request->input("addition_guest") > 0 ?$request->input("addition_guest")."****".$request->input("addition_guest_price"):null,
            'discount'              => $request->input('discount'),
            'updated_by'            => Auth()->User()->id,
            'updated_at'            => date('Y-m-d h:i:s')
        ];

        if(!empty($request->bed_name)){
            $postData['bed_name'] = json_encode($request->bed_name);
        }

        if(!empty($request->amenities)){
            $postData['amenities'] = json_encode($request->amenities);
        }

        $featured_imagePath = "";
        $imagesPaths        = [];

        $uuid = $request->input('id');
        $result =  Property::where(["uuid"=>$uuid])->first();

        $location = Location::where("id",$request->location_id)->first();

        $BasePath = "location/".str_replace(' ', '_', strtolower($location->location))."/".str_replace(' ', '_', strtolower($request->room_name));
        
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
        

        Property::where(['uuid'=>$uuid])->update($postData);

        return back()->with('success', 'Property saved successfully');
    }

    public static  function DeleteImage(Request $request, $id){ 

        $path = $request->query("path");
        $type = $request->query("type");
 
        $result =  Property::find($id);
 
        if($type=="featured_image"){
            if(unlink(storage_path('app/public/'.$path))){
                Property::where(['id'=>$id])->update([
                    'featured_image'   => "",
                ]);
            }
        }
 

       if($type=="images_paths"){
         $arrayData = json_decode($result->images_paths, true);
         if(unlink(storage_path('app/public/'.$path))){
             $arrayPathLeft = self::unsetArray($path,$arrayData);
             Property::where(['id'=>$id])->update([
                 'images_paths'   => json_encode($arrayPathLeft),
             ]);
         }
       }
 
       return back()->with('success', 'Images deleted successfully');
    }

    public static  function DeleteBed(Request $request, $id){ 

        $path = $request->query("path");
        $type = $request->query("type");
 
        $result =  Property::find($id);

       if($type=="bed"){
         $arrayData = json_decode($result->bed_name, true);
             $arrayPathLeft = self::unsetArray($path,$arrayData);
             Property::where(['id'=>$id])->update([
                 'bed_name'   => json_encode($arrayPathLeft),
             ]);
       }
 
       return back()->with('success', 'Bed deleted successfully');
    }


    function DeleteRoomPrice($pricing_id){
        
        $price = Pricing::find($pricing_id);
        $price->delete();

        return back()->with('success', 'Price deleted successfully');
    }

 

    public static  function unsetArray($element,$arrayStack){ 
        //delete element in array by value 
        if (($key = array_search($element, $arrayStack)) !== false) {
            unset($arrayStack[$key]);
        }
        return $arrayStack;
    }

    public static  function addToArray($element,$arrayStack){ 
        //delete element in array by value 
        if (($key = array_search($element, $arrayStack)) !== false) {
            unset($arrayStack[$key]);
        }
        return $arrayStack;
    }


    public static function uploadSingleImage($fileData,$fileName){

        $fileName = trim($fileName."_".md5(Auth()->User()->id.time())).'.'.$fileData->extension();  
   
        $fileData->move(public_path('uploads'), $fileName);

        return "uploads/".$fileName;
    }


}
