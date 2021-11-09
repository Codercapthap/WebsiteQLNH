<?php

namespace App\Http\Controllers;

use App\Models\Food;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('throttle');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home/home');
    }

    public function bookTable(){
        return view('home/book-table');
    }

    public function menu(){
        $data = Food::all();
        return view('home/menu', ['foods' => $data]);
    }

    public function about(){
        return view('home/about-us');
    }

    public function contact(){
        return view('home/contact');
    }
}
