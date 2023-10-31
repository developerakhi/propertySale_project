<?php

namespace App\Http\Controllers\BackendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('admin.home');
    }


    //admin custom logout
    public function logout()
    {
    Auth::logout();
    $notification= array('messege' =>'You are loged out!','alert-type'=>'success');
    return redirect('admin')->with($notification);
    }
}
