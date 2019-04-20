<?php

namespace App\Http\Controllers\Frontend\Rest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Libs\Config\StatusCodeConfig;
use Mail;
use Validator;
use App\Models\CategoryModel;

class ContactCtrl extends Controller
{
    private $categoryModel;

    public function __construct(CategoryModel $categoryModel) {
        $this->categoryModel = $categoryModel;
    }

    public function insert(Request $request){
        //validate
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ], [
            'name.required' => StatusCodeConfig::CONST_VALIDATE_NAME,
            'phone.required' => StatusCodeConfig::CONST_VALIDATE_PHONE,
            'address.required' => StatusCodeConfig::CONST_VALIDATE_ADDRESS
        ]);
        
        if ($validate->fails()) {
            return response()->json($validate->messages(), 422);
        }

        $name = $request->input('name','');
        $phone = $request->input('phone','');
        $address = $request->input('address','');

        //thuc hien insert
        $cateId = $this->categoryModel->insertGetId([
            "name" => $name,
            "phone" => $phone,
            "address" => $address,
            "created_at" => Date('Y-m-d H:i:s'),
            "updated_at" => Date('Y-m-d H:i:s')
        ]);
        if(empty($cateId)){
            return response()->json(['status' => StatusCodeConfig::CONST_VALIDATE_ERRORS], 422);
        }
        return response()->json(['status' => true], 200);
    }
}
