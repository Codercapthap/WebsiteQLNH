<?php

namespace App\Http\Controllers\ModelController;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller{
    public function delete(Request $request){
        $id = $request->input('id');
        $destroy = Book::destroy($id);
        if($destroy == 0) return $id;
        else return "ok";
    }
    public function add(Request $request){
        $bookDay = $request->input('bookDay');
        $bookTime = $request->input('bookTime');
        $sl = $request->input('sl');
        $hoten = $request->input('hoten');
        $email = $request->input('email');
        $notes = $request->input('notes');
        try{
            Book::create([
                'bookDay' => $bookDay,
                'bookTime' => $bookTime,
                'sl' => $sl,
                'hoten' => $hoten,
                'email' => $email,
                'notes' => $notes,
                'checked' => 0
            ]);
            return 'ok';
        }catch(\Illuminate\Database\QueryException $ex){ 
            return var_dump($ex->getMessage());
        }
    }

    public function check(Request $request){
        $id = $request->input('id');
        $checkBoolean = $request->input('check');
        $check = 1;
        if ($checkBoolean == 'false') $check = 0;
        try{
            Book::where('id', '=', $id)->update(['checked' => $check]);
            return 'ok';
        }catch(\Illuminate\Database\QueryException $ex){
            return var_dump($ex->getMessage());
        }
    }
}