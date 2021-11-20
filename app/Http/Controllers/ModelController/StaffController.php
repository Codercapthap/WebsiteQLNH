<?php

namespace App\Http\Controllers\ModelController;

use App\Http\Controllers\Controller;
use App\Models\NhanVien;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    function stripUnicode($str){
        if(!$str) return false;
        $unicode = array(
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
        'd'=>'đ',
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'i'=>'í|ì|ỉ|ĩ|ị',
        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
        );
        foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
        return $str;
    }

    public function searchStaffs(Request $request){
        $name = $request->input('name');
        $data = NhanVien::where('name', 'like', "%$name%")->get();
        return view('dashboard/tables', ['nhanVien' => $data]);
    }

    //edit
    public function editStaffs(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $position = $request->input('position');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $salary = $request->input('salary');
        $errors = NhanVien::validate($request->all());
        if(isset($errors['name'])){
            return array(
                'status' => 'error',
                'msg' => $errors['name'],
                'data' => ''
            );
        }
        if(isset($errors['position'])){
            return array(
                'status' => 'error',
                'msg' => $errors['position'],
                'data' => ''
            );
        }
        if(isset($errors['address'])){
            return array(
                'status' => 'error',
                'msg' => $errors['address'],
                'data' => ''
            );
        }
        if(isset($errors['phone'])){
            return array(
                'status' => 'error',
                'msg' => $errors['phone'],
                'data' => ''
            );
        }
        if(isset($errors['salary'])){
            return array(
                'status' => 'error',
                'msg' => $errors['salary'],
                'data' => ''
            );
        }
        if($id == "null"){
            try{
                $new = NhanVien::create([
                    'name' => $name,
                    'position' => $position,
                    'address' => $address,
                    'phone' => $phone,
                    'salary' => $salary
                ]);
                $username = $this->stripUnicode($new['name']);
                $username = strtolower($username);
                $username = str_replace(' ', '', $username);
                if(strcasecmp($new['position'], 'Admin') == 0){
                    User::create([
                        'username' => $username . $new['id'],
                        'type' => 'admin',
                        'password' => Hash::make('quantri' . $new['id']),
                        'idStaff' => $new['id']
                    ]);
                }
                else{
                    User::create([
                        'username' => $username . $new['id'],
                        'type' => 'nhanvien',
                        'password' => Hash::make('nhanvien' . $new['id']),
                        'idStaff' => $new['id']
                    ]);
                }
                $returnData = array(
                    'status' => 'ok',
                    'msg' => 'ok',
                    'data' => [
                        'id' => $new->id,
                        'name' => $name,
                        'position' => $position,
                        'address' => $address,
                        'phone' => $phone,
                        'salary' => $salary
                    ]
                );
            }catch(\Illuminate\Database\QueryException $ex){ 
                $returnData = array(
                    'status' => 'error',
                    'msg' => 'Có lỗi xảy ra, vui lòng thử lại sau',
                    'data' => []
                );
            }
        }
        else{
            try{
                NhanVien::where('id', 'like', $id)->update([
                    'name' => $name,
                    'position' => $position,
                    'address' => $address,
                    'phone' => $phone,
                    'salary' => $salary
                ]);
                $username = $this->stripUnicode($name);
                $username = strtolower($username);
                $username = str_replace(' ', '', $username);
                if(strcasecmp($position, 'Admin') == 0){
                    User::where('idStaff', 'like', $id)->update([
                        'username' => $username . $id,
                        'type' => 'admin',
                        'password' => Hash::make('quantri' . $id),
                    ]);
                }
                else{
                    User::where('idStaff', 'like', $id)->update([
                        'username' => $username . $id,
                        'type' => 'nhanvien',
                        'password' => Hash::make('nhanvien' . $id),
                    ]);
                }
                $returnData = array(
                    'status' => 'ok',
                    'msg' => 'ok',
                    'data' => [
                        'name' => $name,
                        'position' => $position,
                        'address' => $address,
                        'phone' => $phone,
                        'salary' => $salary
                    ]
                );
            }catch(\Illuminate\Database\QueryException $ex){ 
                $returnData = array(
                    'status' => 'error',
                    'msg' => 'Có lỗi xảy ra, vui lòng thử lại sau',
                    'data' => []
                );
            }
        }
        return $returnData;
    }

    public function delete(Request $request){
        $id = $request->input('id');
        try{
            User::where('idStaff', 'like', $id)->delete();
            NhanVien::destroy($id);
            $returnData = array(
                'status' => 'ok',
                'msg' => ''
            );
        }catch(\Illuminate\Database\QueryException $ex){ 
            $returnData = array(
                'status' => 'Error',
                'msg' => 'Có lỗi xảy ra, vui lòng thử lại sau'
            );
        }
        return $returnData;
    }
}
