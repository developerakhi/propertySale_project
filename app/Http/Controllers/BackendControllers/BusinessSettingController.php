<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;
use DB;
// use Image;

class BusinessSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){

        $data=DB::table('businesssettings')->first();
        return view('admin.setting.index', compact('data'));
    }

    function update(Request $request){
        $data=array();
        $data['website_name']= $request->website_name;
        $data['business_tag']= $request->business_tag;
        $data['email']= $request->email;
        $data['phone']= $request->phone;
        $data['address']= $request->address;
        $data['meta']= $request->meta;
        $data['meta_description']= $request->meta_description;
        $data['currency']= $request->currency;
        $data['facbook_links']= $request->facbook_links;
        $data['instagram_links']= $request->instagram_links;
        $data['linkedin_links']= $request->linkedin_links;
        $data['twitter_links']= $request->twitter_links;
        $data['youtube_links']= $request->youtube_links;
        $data['updated_at']= now();
        

        if ($request->logo) {
            if (File::exists($request->old_logo)) 
            {
            unlink($request->old_logo);
            }
            $photo=$request->logo;
            
            $logoname=uniqid().'.'.$photo->getClientOriginalExtension();
            
            Image::make($photo)->resize(99,40)->save('public/files/setting/'.$logoname);
            
            $data['logo']='public/files/setting/'.$logoname;
            }else
            {
                $data['logo']=$request->old_logo; 
            }

        if ($request->favicon) {
            if (File::exists($request->old_favicon)) 
           {
           unlink($request->old_favicon);
           }
           $fiphoto=$request->favicon;
           $favname=uniqid().'.'.$fiphoto->getClientOriginalExtension();
           Image::make($fiphoto)->resize(32,32)->save('public/files/setting/'.$favname);
           $data['favicon']='public/files/setting/'.$favname;
           }else
           {
               $data['favicon']=$request->old_favicon; 
           }

            if ($request->meta_image) {
                 if (File::exists($request->old_meta_image)) 
                {
                unlink($request->old_meta_image);
                }
                $metaphoto=$request->meta_image;
            $favname=uniqid().'.'.$metaphoto->getClientOriginalExtension();
            Image::make($metaphoto)->resize(600,300)->save('public/files/setting/'.$favname);
            $data['meta_image']='public/files/setting/'.$favname;
            }else
            {
                $data['meta_image']=$request->old_meta_image; 
            }
    
            DB::table('businesssettings')->where('id', 1)->update($data);
    
              $notification= array('messege' =>'Website Setting Updated!','alert-type'=>'success');
            return redirect()->back()->with($notification); 
        }
}
