<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model{
    public $timestamps = false;
    protected $table = 'nhanvien';
    protected $fillable = ['id', 'name', 'position', 'address', 'phone', 'salary'];
    public static function validate(array $data){
        $errors = [];

        if(! $data['name']){
            $errors['name'] = 'Hãy nhập tên vào.';
        }

        if (! $data['position']) {
            $errors['position'] ='Hãy nhập chức vụ vào.';
        }

        if (! $data['address']) {
            $errors['address'] ='Hãy nhập địa chỉ vào.';
        }
        
        if (strlen($data['phone']) <10||strlen($data['phone']) >=11) {
            $errors['phone'] ='Số điện thoại sai định dạng.';     
        }

        if (! $data['salary']) {
            $errors['salary'] ='Hãy nhập lương vào';
        }
        return $errors;   
    }
}