<?php

namespace App\Http\Controllers\Backend\Rest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Validator;
use App\Libs\Config\StatusCodeConfig;

class CategoryCtrl extends Controller
{
    private $categoryModel;

    public function __construct(CategoryModel $categoryModel) {
        $this->categoryModel = $categoryModel;
    }

    public function listCategory(Request $request){
        
        //lay danh sach
        $perPage = $request->input('perPage', 10);
        $freeText = $request->input('freeText', '');

        $resData = $this->categoryModel->filterName($freeText)->buildCond()->get();
                       
        return response()->json($resData);
    }

    
    public function delete($id){
        //validate
        $validate = Validator::make(['id' => $id], [
            'id' => 'required|exists:category,id',
        ], [
            'id.required' => StatusCodeConfig::CONST_STATUS_ID_NOT_EMPTY,
            'id.exists' => StatusCodeConfig::CONST_STATUS_ID_NOT_EXISTS,
        ]);
        
        if ($validate->fails()) {
            return response()->json($validate->messages(), 422);
        }
        //thuc hien xoa
        $this->categoryModel->filterId($id)->buildCond()->delete();

        return response()->json(['status' => true]);
    }
}
