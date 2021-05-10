<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function LocationDetails($slug){
       
        $data['location'] = Location::where('slug',$slug)->first();

        if(!empty($data['location']))
        return view("website/location/detail", $data);
        else
        return \Redirect("/");
    }


    public function Create(){
       
        $data['locationList'] = self::GetAPTLocations();
        
        return view("admin/location/create",$data);
    }

    public function Store(Request $request)
    {
        
        $request->validate([
            'location' => 'required|unique:apartment_locations',
        ]);
        $validator = Validator::make($request->all(), [
            'location' => 'required|unique:apartment_locations',
            'apartmentName' => 'required|unique:apartment_locations',
        ]);

        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        }

        $query = Location::create([
            'uuid'          => Str::uuid(),
            'location'      => $request->input("location"),
            'apartmentName' => $request->input("apartmentName"),
            'slug'          => strtolower(str_replace(' ', '-', $request->apartmentName)),
            'heading'       => $request->input("heading"),
            'description'   => $request->input("description"),
            'thingToDo'     => $request->input("thingToDo"),
            'status'        => "ACTIVE"
          ]);

          $lastID = $query->id;
          
          $locationImagePath    = [];
          $attractionImagesPath = [];
          $bannerImagePath      = "";
          $featuredImagePath    = "";

          $BasePath = "location/".str_replace('', '', $request->location);

        if ($request->hasfile('featuredImage')) {
            $image = $request->file('featuredImage');
            $filename = 'featured.'.$image->extension();  
            $path = $image->storeAs($BasePath, $filename, 'public');
            $featuredImagePath = $path;
        }

        if ($request->hasfile('bannerImage')) {
            $image = $request->file('bannerImage');
            $filename = 'banner.'.$image->extension();  
            $path = $image->storeAs($BasePath, $filename, 'public');
            $bannerImagePath = $path;
        }

        if ($request->hasfile('locationImages')) {
            $locationImages = $request->file('locationImages');
            foreach($locationImages as $image) {
                $filename = 'location_'.date("ymdhis").mt_rand(1111,2222).".".$image->extension();  
                $path = $image->storeAs($BasePath, $filename, 'public');
                $locationImagePath[] = $path;
            }
        }

        if ($request->hasfile('attractionImages')) {
            $attractionImages = $request->file('attractionImages');
            foreach($attractionImages as $image) {
                $filename = 'attraction_'.date("ymdhis").mt_rand(1111,2222).".".$image->extension();  
                $path = $image->storeAs($BasePath, $filename, 'public');
                $attractionImagesPath[] = $path;
            }
        }
         
        Location::where(['id'=>$lastID])->update([
            'featuredImage'    => $featuredImagePath,
            'bannerImage'      => $bannerImagePath,
            'locationImages'   => json_encode($locationImagePath),
            'attractionImages' => json_encode($attractionImagesPath),
        ]);

        return back()->with('success', 'Locations saved successfully');
    }



    public function Update(Request $request)
    {
        
        $request->validate([
            'location' => 'required',
        ]);


        $uuid = $request->input('id');
        
        $postData= [
            'location'      => $request->input("location"),
            'apartmentName' => $request->input("apartmentName"),
            'slug'          => strtolower(str_replace(' ', '-', $request->apartmentName)),
            'heading'       => $request->input("heading"),
            'description'   => $request->input("description"),
            'thingToDo'     => $request->input("thingToDo"),
        ];

        $result =  Location::where(["uuid"=>$uuid])->first();

          $BasePath = "location/".str_replace('', '', $request->location);

        if ($request->hasfile('featuredImage')) {
            $image = $request->file('featuredImage');
            $filename = 'featured.'.$image->extension();  
            $path = $image->storeAs($BasePath, $filename, 'public');
            $postData["featuredImage"] = $path;
        }

        
        if ($request->hasfile('bannerImage')) {

            $image = $request->file('bannerImage');
            $filename = 'banner.'.$image->extension();  
            $path = $image->storeAs($BasePath, $filename, 'public');
            $postData["bannerImage"] = $path;
        }

        if ($request->hasfile('locationImages')) {

            $locationImagePath = json_decode($result->locationImages, true);

            $locationImages = $request->file('locationImages');
            foreach($locationImages as $image) {
                $filename = 'location_'.date("ymdhis").mt_rand(1111,2222).".".$image->extension();  
                $path = $image->storeAs($BasePath, $filename, 'public');
                $locationImagePath[] = $path;
            }
            $postData["locationImages"] = json_encode($locationImagePath);
        }

        if ($request->hasfile('attractionImages')) {

            $attractionImagesPath = json_decode($result->attractionImages, true);

            $attractionImages = $request->file('attractionImages');
            foreach($attractionImages as $image) {
                $filename = 'attraction_'.date("ymdhis").mt_rand(1111,2222).".".$image->extension();  
                $path = $image->storeAs($BasePath, $filename, 'public');
                $attractionImagesPath[] = $path;
            }
            $postData["attractionImages"] = json_encode($attractionImagesPath);
        }
        
        $query = Location::where(["uuid"=>$uuid])->update($postData);

        return back()->with('success', 'Locations updated successfully');
    }


    


    public function Detail($id){
       
        $data['locationList'] = self::GetAPTLocations();

        $data['info'] = Location::where(["uuid"=>$id])->first();

        return view("admin/location/create", $data);
    }

    public static  function DeleteImage(Request $request, $id){ 

       $path = $request->query("path");
       $type = $request->query("type");

       $result =  Location::find($id);

      if($type=="featuredImage"){
         if(unlink(storage_path('app/public/'.$path))){
            Location::where(['id'=>$id])->update([
                'featuredImage'   => "",
            ]);
         }
      }

      if($type=="bannerImage"){
        if(unlink(storage_path('app/public/'.$path))){
           Location::where(['id'=>$id])->update([
               'bannerImage'   => "",
           ]);
        }
     }

      if($type=="locationImages"){
        $arrayData = json_decode($result->locationImages, true);
        if(unlink(storage_path('app/public/'.$path))){
            $arrayPathLeft = self::unsetArray($path,$arrayData);
            Location::where(['id'=>$id])->update([
                'locationImages'   => json_encode($arrayPathLeft),
            ]);
        }
      }

      if($type=="attractionImages"){
        $arrayData = json_decode($result->attractionImages, true);
        if(unlink(storage_path('app/public/'.$path))){
            $arrayPathLeft = self::unsetArray($path,$arrayData);
            Location::where(['id'=>$id])->update([
                'attractionImages' => json_encode($arrayPathLeft),
            ]);
        }
      }

      return back()->with('success', 'Images deleted successfully');
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
