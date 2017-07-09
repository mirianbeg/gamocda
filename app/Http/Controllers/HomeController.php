<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = Category::all();
        return view('home')->with('categories', $categories ) ;
    }
    public function admin()
    {   
        $categories = Category::all();
        return view('admin')->with('categories', $categories ) ;
    }
}
