<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(!Auth::guest()){


        if(!Auth::user()->is_admin==1){
            // $orders=DB::table('orders')->where('user_id',Auth::id())->orderBy('id','DESC')->take(10)->get();
            //total order
            // $total_order=DB::table('orders')->where('user_id',Auth::id())->count();
            // $complete_order=DB::table('orders')->where('user_id',Auth::id())->where('status',3)->count();
            // $cancel_order=DB::table('orders')->where('user_id',Auth::id())->where('status',5)->count();
            // $return_order=DB::table('orders')->where('user_id',Auth::id())->where('status',4)->count();

            return view('frontend.index');
        }else{
            return redirect()->back();
        }

    }else {
        // return redirect(route('user.login'));
    }
    
    }

   
    public function adminLogin()
    {
        return view('auth.admin_login');
    }
}
