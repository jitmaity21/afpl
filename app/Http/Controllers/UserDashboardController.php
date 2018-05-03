<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Session;

class UserDashboardController extends Controller
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
    * Show user dashboard
    * if user role_id is 0 show only his/her details
    * else user role_id is 1 show his/her details with his/her created user details
    */
    public function show(Request $request)
    {
      if($request->user()->role_id == 0){
        return view('user.customer.dashboard');
      }else{
        return view('user.corporate.dashboard');
      }
    }




}
