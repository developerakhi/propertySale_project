<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;



class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){

        $data = DB::table('categories')->get();
        return view('admin.category.index', compact('data'));
    }

    function store(Request $request){

        $data=array();
        $data['category_name'] = $request->category_name;

        DB::table('categories')->insert($data);

          $notification= array('messege' =>'Category Inserted!','alert-type'=>'success');
        return redirect()->back()->with($notification); 
    }

    function edit($id){
        $data = DB::table('categories')->where('id', $id)->first();
        return view('admin.category.edit', compact('data'));
    }

    function update(Request $request){

        $data=array();
        $data['category_name']= $request->category_name;

        DB::table('categories')->where('id', $request->id)->update($data);

        $notification= array('messege' =>'Category Updated!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }

    function destory(Request $request, $id){

        DB::table('categories')->where('id', $id)->delete();

        $notification= array('messege' =>'Category Deleted!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }
}
