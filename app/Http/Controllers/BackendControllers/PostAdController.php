<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use DB;

class PostAdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){

        $datas = DB::table('post_ads')->get();
        return view('admin.PostAd.index', compact('datas'));
    }
    function edit($id){
        $data = DB::table('post_ads')->where('id',$id)->first();
        return view('admin.PostAd.edit', compact('data'));
    }
    
    function update(Request $request){
        
        $data=array();
        $data['status'] = $request->status;
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
        
        
        DB::table('post_ads')->where('id', $request->id)->update($data);

        $notification= array('messege' =>'Ads Query Updated!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
       
    }
    
    public function show($id)
    {
        $data = DB::table('post_ads')->where('id',$id)->first();
    
        return view('admin.PostAd.show', compact('data'));
    }
    
    
    function destory(Request $request, $id){

        DB::table('post_ads')->where('id', $id)->delete();

        $notification= array('messege' =>'Post Ads Query Deleted!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }
    
}
