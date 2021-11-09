<?php

namespace App\Http\Controllers\ModelController;

use App\Http\Controllers\Controller;
use App\Models\NhanVien;
use Illuminate\Http\Request;

class StaffController extends Controller
{
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
        $destroy = NhanVien::destroy($id);
        if($destroy == 0) {
            $returnData = array(
                'status' => 'Error',
                'msg' => 'Có lỗi xảy ra, vui lòng thử lại sau'
            );
        }
        else{
            $returnData = array(
                'status' => 'ok',
                'msg' => ''
            );
        }
        return $returnData;
    }
}
