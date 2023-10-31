<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\LocationType;
use DB;
use Intervention\Image\Facades\Image;
class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $datas = Property::all();
        return view('admin.property.index', compact('datas')); 
    }
    
    function create(){
        $types = LocationType::all();
        $data = DB::table('properties')->get();
        $categories = DB::table('categories')->get();
        $locations = DB::table('locations')->get();
        $sizes = DB::table('sizes')->get();

        return view('admin.property.create', compact('data','categories','locations','sizes','types'));
    }

    function store(Request $request){

        $data=array();
        $data['category_id'] = $request->category_id;
        $data['location_id'] = $request->location_id;
        $data['size_id'] = $request->size_id;
        $data['location_type_id'] = $request->location_type_id;
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['size'] = $request->size;
        $data['bed'] = $request->bed;
        $data['bath'] = $request->bath;
        $data['drawing'] = $request->drawing;
        $data['dining'] = $request->dining;
        $data['kitchen'] = $request->kitchen;
        $data['facilities'] = $request->facilities;
        $data['price'] = $request->price;

        $thumb_image=$request->thumb_image;
        $favname=uniqid().'.'.$thumb_image->getClientOriginalExtension();
        Image::make($thumb_image)->resize(500,500)->save('public/files/property/'.$favname);
        $data['thumb_image']='public/files/property/'.$favname;
        
        $property_banner = $request->property_banner;
        $favname=uniqid().'.'.$property_banner->getClientOriginalExtension();
        Image::make($property_banner)->resize(700,500)->save('public/files/property/'.$favname);
        $data['property_banner']='public/files/property/'.$favname;
       
        //multiple images
       $images = array();
       if($request->hasFile('images')){
           foreach ($request->file('images') as $key => $image) {
               $imageName= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
               Image::make($image)->resize(600,600)->save('public/files/property/'.$imageName);
               array_push($images, $imageName);    
           }
           $data['image'] = json_encode($images);
       }
       
       $property_banner=$request->property_banner;
        $favname=uniqid().'.'.$property_banner->getClientOriginalExtension();
        Image::make($property_banner)->resize(1200,365)->save('public/files/property/'.$favname);
        $data['property_banner']='public/files/property/'.$favname;
        
        DB::table('properties')->insert($data);

          $notification= array('messege' =>'Properties Inserted!','alert-type'=>'success');
        return redirect()->back()->with($notification); 
    }


    function edit($id){
        
        $data = DB::table('properties')->where('id', $id)->first();
        $categories = DB::table('categories')->get();
        $locations = DB::table('locations')->get();
        $sizes = DB::table('sizes')->get();
        $types = LocationType::all();
        return view('admin.property.edit', compact('data','categories','locations','sizes','types'));
    }

    function update(Request $request){
        $data=array();
        $data['category_id'] = $request->category_id;
        $data['location_id'] = $request->location_id;
        $data['size_id'] = $request->size_id;
        $data['location_type_id'] = $request->location_type_id;
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['size'] = $request->size;
        $data['bed'] = $request->bed;
        $data['bath'] = $request->bath;
        $data['drawing'] = $request->drawing;
        $data['dining'] = $request->dining;
        $data['kitchen'] = $request->kitchen;
        $data['facilities'] = $request->facilities;
        $data['price'] = $request->price;

        //__old thumb_image ase kina__ jodi thake new thumb_image insert korte hobe
       $thumb_image = $request->file('thumb_image');
        if($thumb_image) {
           
             $thumb_image=$request->thumb_image;
             $photoname=hexdec(uniqid()).'.'.$thumb_image->getClientOriginalExtension();
             Image::make($thumb_image)->resize(500,500)->save('public/files/property/'.$photoname);
             $data['thumb_image']='public/files/property/'.$photoname;   // public/files/product/plus-point.jpg   
         
		}
		
		$property_banner = $request->file('property_banner');
        if($property_banner) {
           
             $property_bannere=$request->property_banner;
             $photoname=hexdec(uniqid()).'.'.$property_banner->getClientOriginalExtension();
             Image::make($property_banner)->resize(500,500)->save('public/files/property/'.$photoname);
             $data['property_banner']='public/files/property/'.$photoname;   // public/files/product/plus-point.jpg   
         
		}

       //__multiple image update__//
        
        $old_images = $request->has('old_image');
        if($old_images){
            $images = $request->old_image;
            $data['image'] = json_encode($images);
        }else{
            $images = array();
            $data['image'] = json_encode($images); 
        }

        if($request->hasFile('images')){
           foreach ($request->file('images') as $key => $image) {
               $imageName= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
               Image::make($image)->resize(600,600)->save('public/files/property/'.$imageName);
               array_push($images, $imageName);    
           }
           $data['image'] = json_encode($images);
       }
       
       
       DB::table('properties')->where('id', $request->id)->update($data);

        $notification= array('messege' =>'Properties Updated!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
       
    }

    //get child category
    public function getChildCategory($id)
    {
        $data=DB::table('sizes')->where('category_id',$id)->get();
        return response()->json($data);

    }


    function destory(Request $request, $id){

        DB::table('properties')->where('id', $id)->delete();

        $notification= array('messege' =>'Properties Deleted!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }
}
