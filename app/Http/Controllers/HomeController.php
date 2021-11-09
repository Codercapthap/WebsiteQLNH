<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Message;
use App\Models\NhanVien;
use App\Models\Book;

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

    public function dashboard(){
        return view('dashboard/dashboard');
    }
    
    public function tables(){
        $data = NhanVien::all();
        return view('dashboard/tables', ['nhanVien' => $data]);
    }

    public static function foods(){
        $data = Food::all();
        return view('dashboard/foods', ['foods' => $data]);
    }

    public function map(){
        return view('dashboard/map');
    }

    public function notifications(){
        $data = Message::all();
        return view('dashboard/notifications', ['messages' => $data]);
    }
    
    public function books(){
        $data = Book::all();
        return view('dashboard/books', ['books' => $data]);
    }
}
