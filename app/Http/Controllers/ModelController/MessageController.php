<?php

namespace App\Http\Controllers\ModelController;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller{
    public function delete(Request $request){
        $id = $request->input('id');
        $destroy = Message::destroy($id);
        if($destroy == 0) return $id;
        else return "ok";
    }

    public function add(Request $request){
        $name = $request->input('name');
        $subject = $request->input('subject');
        $email = $request->input('email');
        $content = $request->input('message');
        try{
            Message::create([
                'hoten' => $name,
                'subject' => $subject,
                'email' => $email,
                'content' => $content,
            ]);
            return 'ok';
        }catch(\Illuminate\Database\QueryException $ex){ 
            return var_dump($ex->getMessage());
        }
    }
}