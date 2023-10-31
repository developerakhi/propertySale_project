<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;
use DB;

class SizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){


        $data = Size::all();

        $categories = DB::table('categories')->get();
        return view('admin.size.index', compact('data', 'categories'));
    }

    function store(Request $request){

        $data=array();
        $data['size'] = $request->size;
        $data['category_id'] = $request->category_id;


        DB::table('sizes')->insert($data);

          $notification= array('messege' =>'Size Inserted!','alert-type'=>'success');
        return redirect()->back()->with($notification); 
    }


    function edit($id){
        $data = DB::table('sizes')->where('id', $id)->first();
        $categories = DB::table('categories')->get();
        return view('admin.size.edit', compact('data', 'categories'));
    }

    function update(Request $request){

        $data=array();
        $data['size']= $request->size;
        $data['category_id'] = $request->category_id;

        DB::table('sizes')->where('id', $request->id)->update($data);
        
        $notification= array('messege' =>'Size Updated!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }

    function destory(Request $request, $id){

        DB::table('sizes')->where('id', $id)->delete();

        $notification= array('messege' =>'Size Deleted!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }

}
