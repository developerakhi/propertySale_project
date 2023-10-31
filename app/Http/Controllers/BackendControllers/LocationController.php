<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LocationType;
use DB;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){

        $data = DB::table('locations')->get();
        return view('admin.location.index', compact('data'));
    }
    
    function store(Request $request){

        $data=array();
        $data['location_name'] = $request->location_name;

        DB::table('locations')->insert($data);

          $notification= array('messege' =>'Location Inserted!','alert-type'=>'success');
        return redirect()->back()->with($notification); 
    }

    function edit($id){
        $data = DB::table('locations')->where('id', $id)->first();
        return view('admin.location.edit', compact('data'));
    }

    function update(Request $request){

        $data=array();
        $data['location_name']= $request->location_name;

        DB::table('locations')->where('id', $request->id)->update($data);

        $notification= array('messege' =>'Location Updated!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }

    function destory(Request $request, $id){

        DB::table('locations')->where('id', $id)->delete();

        $notification= array('messege' =>'Location Deleted!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }
    
    
    
    
    
    //locationType
    
    public function locationType(){
        $data = LocationType::all();
        $locations = DB::table('locations')->get();
        return view('admin.locationType.index', compact('data','locations'));
    }
    
    function storeType(Request $request){

        $data=array();
        $data['type'] = $request->type;
        $data['location_id'] = $request->location_id;

        DB::table('location_types')->insert($data);

          $notification= array('messege' =>'Location Type Inserted!','alert-type'=>'success');
        return redirect()->back()->with($notification); 
    }
    
    function editType($id){
        
        $data = DB::table('location_types')->where('id', $id)->first();
        $locations = DB::table('locations')->get();
        return view('admin.locationType.edit', compact('data', 'locations'));
    }

    function updateType(Request $request){

        $data=array();
        $data['type']= $request->type;
        $data['location_id'] = $request->location_id;
        DB::table('location_types')->where('id', $request->id)->update($data);

        $notification= array('messege' =>'Location Type Updated!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }
    
    
    
    function destoryType(Request $request, $id){

        DB::table('location_types')->where('id', $id)->delete();

        $notification= array('messege' =>'Location Type Deleted!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }
    
    
}
