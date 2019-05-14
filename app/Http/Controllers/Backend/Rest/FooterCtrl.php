<?php

namespace App\Http\Controllers\Backend\Rest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FooterModel;
use Validator;
use App\Libs\Config\StatusCodeConfig;

class FooterCtrl extends Controller
{
	private $footerModel;

	public function __construct(FooterModel $footerModel) {
		$this->footerModel = $footerModel;
	}

	public function info(){
		$dataInfo = $this->footerModel
		->filterId(1)
		->buildCond()->first();

		return response()->json($dataInfo);
	}

	public function update(Request $request){
		$dataInfo = $this->footerModel
		->filterId(1)
		->buildCond()->first();

		$title = $request->input('title','');
		$nameStore = $request->input('nameStore','');
		$address = $request->input('address','');
		if($dataInfo){
			if ($request->hasFile('avatar')) {

				$avatar_name = $request->avatar->store('public/footer');
			}else{
				$avatar_name = $dataInfo->avatar;
			}

        //thuc hien update
			$dataInfo->title = $title;
			$dataInfo->nameStore = $nameStore;
			$dataInfo->address = $address;
			$dataInfo->avatar = $avatar_name;
			$dataInfo->updated_at = Date('Y-m-d H:i:s');
			$dataInfo->save();

			return response()->json(['status' => true]);

		}else{
			$avatar_name = '';
			if ($request->hasFile('avatar')) {

				$avatar_name = $request->avatar->store('public/footer');
			}else{
				$avatar_name = '';
			}

        //thuc hien insert
			$getId = $this->footerModel->insertGetId([
				"title" => $title, 
				"nameStore" => $nameStore, 
				"address" => $address, 
				"avatar" => $avatar_name, 
				"created_at" => Date('Y-m-d H:i:s'),
				"updated_at" => Date('Y-m-d H:i:s')
			]);
			if(empty($getId)){
				return response()->json(['status' => StatusCodeConfig::CONST_VALIDATE_ERRORS], 422);
			}
			return response()->json(['status' => true], 200);
		}
	}
}
