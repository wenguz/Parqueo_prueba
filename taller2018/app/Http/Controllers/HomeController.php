<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        /**$request->user()->authorizeRoles(['user','admin']);
        $request->user()->authorizeRoles(['user','prop']);
*/
        return view('home');
    }
    public function gmaps()
    {
     $locations=DB::table('locations')->get();
     return view('home',compact('locations'));
    }
}
