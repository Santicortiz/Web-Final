<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

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
        return view('home');
    }
    /*public function start()
    {
        return view('start');
    }*/
    public function logout(){
        return view ('start');
    }
}