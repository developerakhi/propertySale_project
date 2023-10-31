<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\LocationType;
use Intervention\Image\Facades\Image;
use DB;
class IndexController extends Controller
{
    function index(Request $request){
        $categories = DB::table('categories')->get();
        $locations = DB::table('locations')->get();
        $sizes = DB::table('sizes')->get();
        $data = LocationType::all();
        return view('frontend.index', compact('categories','locations','sizes','data'));
    }

    function all_plot(){
        $datas = Property::all();
        $categories = DB::table('categories')->get();
        $locations = DB::table('locations')->get();
        $sizes = DB::table('sizes')->get();

        return view('frontend.all_plot', compact('datas','categories','locations','sizes'));
    }

    function search(Request $request){
        
        $categories = DB::table('categories')->get();
        $locations = DB::table('locations')->get();
        $sizes = DB::table('sizes')->where('category_id', $request->category_id)->get();

        $datas = Property::all();
        
       
        
        if($request->category_id != null){
            $datas = $datas->where('category_id', $request->category_id);
            $category_name = $categories->where('id', $request->category_id)->first();
        }else{
            $category_name =null;
        }
        
        if($request->location_id != null){
            $datas = $datas->where('location_id', $request->location_id);
            $location_name = $locations->where('id', $request->location_id)->first();
        }else{
            $location_name =null;
        }
        
        if($request->size_id != null){
            $datas = $datas->where('size_id', $request->size_id);
            $size_name = $sizes->where('id', $request->size_id)->first();
        }else{
            $size_name =null;
        }
        // dd($datas);exit();
        
        return view('frontend.search', compact('datas','categories','locations','sizes','category_name','location_name','size_name'));
    }
    
    function searchType(Request $request, $location_id){
        
            $categories = DB::table('categories')->get();
            $locations = DB::table('locations')->get();
            $sizes = DB::table('sizes')->where('category_id', $request->category_id)->get();
            $types = LocationType::all();
            $datas = Property::all();
    
            if($request->category_id != null){
                $datas = $datas->where('category_id', $request->category_id);
                $category_name = $categories->where('id', $request->category_id)->first();
            }else{
                $category_name =null;
            }
            if($request->location_id != null){
                $datas = $datas->where('location_id', $location_id);
                $location_name = $locations->where('id', $location_id)->first();
            }else{
                $location_name =null;
            }
            if($request->size_id != null){
                $datas = $datas->where('size_id', $request->size_id);
                $size_name = $sizes->where('id', $request->size_id)->first();
            }else{
                $size_name =null;
            }
    
            return view('frontend.search', compact('datas','categories','locations','sizes','category_name','location_name','size_name','types'));
    }
    

    function details($id){
        $data = Property::where('id', $id)->first();
        $categories = DB::table('categories')->get();
        $locations = DB::table('locations')->get();
        return view('frontend.details', compact('data','categories','locations'));
    }

    //get size
    public function getSizeCategory($id)
    {
        $data=DB::table('sizes')->where('category_id',$id)->get();
        return response()->json($data);

    }
    
    public function searchPlot(Request $request){
        
        $categories = DB::table('categories')->get();
        $locations = DB::table('locations')->get();
        $sizes = DB::table('sizes')->where('category_id', $request->category_id)->get();

        $datas = Property::all();

        if($request->category_id != null){
            $datas = $datas->where('category_id', $request->category_id);
            $category_name = $categories->where('id', $request->category_id)->first();
        }else{
            $category_name =null;
        }
        if($request->location_id != null){
            $datas = $datas->where('location_id', $request->location_id);
            $location_name = $locations->where('id', $request->location_id)->first();
        }else{
            $location_name =null;
        }
        if($request->size_id != null){
            $datas = $datas->where('size_id', $request->size_id);
            $size_name = $sizes->where('id', $request->size_id)->first();
        }else{
            $size_name =null;
        }
        
        if($request->type != null){
            $datas = $datas->where('location_type_id', $request->type);
        }
        
        if($request->min != null && $request->max != null){
            $min = $request->min;
            $max = $request->max;
            $rang = [$min, $max];
            $datas = $datas->whereBetween('price',$rang);
        }
        
         if($request->min != null){
           $datas = $datas->where('price','>=',$request->min);
        }
         if($request->max != null){
            $datas = $datas->where('price','<=',$request->max);
        }

        return view('frontend.search', compact('datas','categories','locations','sizes','category_name','location_name','size_name'));
        
    }
    
    public function storeQuery(Request $request){
        $property = Property::where('id', $request->property_id)->first();
        $data=array();
        $data['title'] = $property->title;
        $data['property_id'] = $property->id;
        $data['location'] = $property->location->location_name;
        $data['price'] = $property->price;
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['comment'] = $request->comment;
        $data['description'] = $request->description;

        DB::table('customer_query')->insert($data);

          $notification= array('messege' =>'Query Submited Successfully!','alert-type'=>'success');
        return redirect()->back()->with($notification); 
    }
    
    public function storeAdQuery(Request $request){
        $data=array();
        $data['title'] = $request->title;
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['status'] = $request->status;
        $data['description'] = $request->description;
        
      
        //multiple images
       $photos = array();
       if($request->hasFile('photos')){
           foreach ($request->file('photos') as $key => $photo) {
               $imageName= hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
               Image::make($photo)->resize(600,600)->save('public/files/ads/'.$imageName);
               array_push($photos, $imageName);    
           }
           $data['photo'] = json_encode($photos);
       }
        
        DB::table('post_ads')->insert($data);

          $notification= array('messege' =>'Ads Query Submited Successfully!','alert-type'=>'success');
        return redirect()->back()->with($notification); 
    }
    
    public function storeVisitSchedule(Request $request){
        $data=array();
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['time'] = $request->time;
        $data['notes'] = $request->notes;
        
        
        DB::table('plot_visits')->insert($data);

          $notification= array('messege' =>'Visit Schedule Submited Successfully!','alert-type'=>'success');
        return redirect()->back()->with($notification); 
    }
}
