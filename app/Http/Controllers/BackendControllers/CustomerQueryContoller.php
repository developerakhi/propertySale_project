<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use DB;

class CustomerQueryContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){

        $datas = DB::table('customer_query')->get();
        return view('admin.customerQuery.index', compact('datas'));
    }
    function edit($id){
        $data = DB::table('customer_query')->where('id',$id)->first();
        return view('admin.customerQuery.edit', compact('data'));
    }
    
    function update(Request $request){
        $data=array();
        $data['comment'] = $request->comment;
        Property::where('id', $request->property_id)->first();
        DB::table('customer_query')->where('id', $request->id)->update($data);

        $notification= array('messege' =>'Query Updated!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
       
    }
    
    function destory(Request $request, $id){

        DB::table('customer_query')->where('id', $id)->delete();

        $notification= array('messege' =>'Customer Query Deleted!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }
}
