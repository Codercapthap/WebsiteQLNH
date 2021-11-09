<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model{
    public $timestamps = false;
    protected $table = 'food';
    protected $fillable = ['id', 'name', 'imgName', 'price', 'description'];
    public static function validate(array $data){
        $errors = [];

        if(! $data['name']){
            $errors['name'] = 'Hãy nhập tên vào.';
        }

        if (! $data['price']) {
            $errors['price'] ='Hãy nhập giá vào.';
        }

        if (! $data['description']) {
            $errors['description'] ='Hãy nhập mô tả vào';
        }
        return $errors;   
    }
}