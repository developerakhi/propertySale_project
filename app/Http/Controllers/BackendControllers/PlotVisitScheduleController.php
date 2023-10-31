<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class PlotVisitScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){

        $datas = DB::table('plot_visits')->get();
        return view('admin.PlotVisit.index', compact('datas'));
    }
    
    function edit($id){
        
        $data = DB::table('plot_visits')->where('id', $id)->first();
        return view('admin.PlotVisit.edit', compact('data'));
    }
    
    function update(Request $request){
        $data=array();
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['start_date'] = $request->start_date;
        $data['time'] = $request->time;
        $data['notes'] = $request->notes;
       
       DB::table('plot_visits')->where('id', $request->id)->update($data);

        $notification= array('messege' =>'Plot Visit Schedule Updated!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
       
    }
    
    
    
    function destory(Request $request, $id){

        DB::table('plot_visits')->where('id', $id)->delete();

        $notification= array('messege' =>'Plot Visit Schedule Deleted!','alert-type'=>'success');
      return redirect()->back()->with($notification); 
    }
}
