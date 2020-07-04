<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Artikel extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function beach()
    {
        return view('beach');
    }
    
    public function blog()
    {
            return view ('blog');
    }

     public function gunung()
     {   
        return view('gunung');
    }
    
    public function Trippackages()
    {
        return view('Trippackages');
    }

    public function family()
    {
        return view('family');
    }

    public function geografi()
    {
        return view('geografi');
    }
}
