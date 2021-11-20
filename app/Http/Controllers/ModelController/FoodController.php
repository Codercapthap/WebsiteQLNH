<?php

namespace App\Http\Controllers\ModelController;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * 
     */

    //search

    public function unique_filename(String $path){
        $num = 0;
        $len = strlen($path);
        for($i = $len - 1; $i >= 0; $i--){
            if($path[$i] == '.') break;
        }
        $fileLoc = substr($path, 0, $i);
        $ext = substr($path, $i);
        while(file_exists($path)){
            $num++;
            $path = $fileLoc . "_" . $num . $ext;
        }
        return $path;
    }

    public function searchFoods(Request $request){
        $name = $request->input('name');
        $data = Food::where('name', 'like', "%$name%")->get();
        return view('dashboard/foods', ['foods' => $data]);
    }

    //edit
    public function editFoods(Request $request){
        // return var_dump($request->all());
        $id = $request->input('ID');
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');
        $errors = Food::validate($request->all());
        if(isset($_FILES['file']['name'])){

            /* Getting file name */
            $fileFullName = $_FILES['file']['name'];
         
            /* Location */
            $location = "images/product/".$fileFullName;

            $location = $this->unique_filename($location);
            $len = strlen($location);
            for($i = $len - 1; $i >= 0; $i--){
                if($location[$i] == '/') break;
            }
            $fileFullName = substr($location, $i + 1);
            $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
            $imageFileType = strtolower($imageFileType);
         
            /* Valid extensions */
            $valid_extensions = array("jpg","jpeg","png");
         
            $file_loca = 0;
            /* Check file extension */
            if(in_array(strtolower($imageFileType), $valid_extensions)) {
               /* Upload file */
                if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
                    $file_loca = $location;
                }
                else{
                    return [
                        'status' => 'error',
                        'msg' => "Có lỗi xảy ra, vui lòng thử lại sau"
                    ];
                }
            }
        }
        else{
            return [
                'status' => 'error',
                'msg' => "Hãy gửi hình ảnh lên"
            ];
        }
        if(isset($errors['name'])){
            return array(
                'status' => 'error',
                'msg' => $errors['name'],
                'data' => ''
            );
        }
        if(isset($errors['price'])){
            return array(
                'status' => 'error',
                'msg' => $errors['price'],
                'data' => ''
            );
        }
        if(isset($errors['description'])){
            return array(
                'status' => 'error',
                'msg' => $errors['description'],
                'data' => ''
            );
        }
        $len = strlen($fileFullName);
        for($i = $len - 1; $i >= 0; $i--){
            if($fileFullName[$i] == '.') break;
        }
        
        $filename = substr($fileFullName, 0, $i);
        if($id == "null"){
            try{
                $new = Food::create([
                    'name' => $name,
                    'imgName' => $filename,
                    'price' => $price,
                    'description' => $description,
                ]);
                $returnData = array(
                    'status' => 'ok',
                    'msg' => 'ok',
                    'data' => [
                        'id' => $new->id,
                        'name' => $name,
                        'price' => $price,
                        'description' => $description,
                        'file_loca' => $file_loca
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
                Food::where('id', 'like', $id)->update([
                    'name' => $name,
                    'imgName' => $filename,
                    'price' => $price,
                    'description' => $description,
                ]);
                $returnData = array(
                    'status' => 'ok',
                    'msg' => 'ok',
                    'data' => [
                        'name' => $name,
                        'price' => $price,
                        'description' => $description,
                        'file_loca' => $file_loca
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
        $destroy = Food::destroy($id);
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
