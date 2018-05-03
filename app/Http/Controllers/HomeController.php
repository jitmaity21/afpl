<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Session;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->user()->role_id == 0){
          return view('home');
          //return redirect('/')->with('status', 'IT WORKS!');
        }else{
          return redirect('/')->with('status', 'IT WORKS!');
        }

    }
}
