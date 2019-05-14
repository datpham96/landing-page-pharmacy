<?php

namespace App\Http\Controllers\Backend\Rest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use Validator;
use App\Libs\Config\StatusCodeConfig;

class BannerCtrl extends Controller
{
	private $bannerModel;

	public function __construct(BannerModel $bannerModel) {
		$this->bannerModel = $bannerModel;
	}

	public function info(){
		$bannerInfo = $this->bannerModel
		->filterId(1)
		->buildCond()->first();

		return response()->json($bannerInfo);
	}

	public function update(Request $request){
		$bannerInfo = $this->bannerModel
		->filterId(1)
		->buildCond()->first();
		if($bannerInfo){
			if ($request->hasFile('avatar')) {

				$avatar_name = $request->avatar->store('public/banner');
			}else{
				$avatar_name = $bannerInfo->avatar;
			}

        //thuc hien update
			$bannerInfo->avatar = $avatar_name;
			$bannerInfo->updated_at = Date('Y-m-d H:i:s');
			$bannerInfo->save();

			return response()->json(['status' => true]);

		}else{
			$avatar_name = '';
			if ($request->hasFile('avatar')) {

				$avatar_name = $request->avatar->store('public/banner');
			}else{
				$avatar_name = '';
			}

        //thuc hien insert
			$bannerId = $this->bannerModel->insertGetId([
				"avatar" => $avatar_name, 
				"created_at" => Date('Y-m-d H:i:s'),
				"updated_at" => Date('Y-m-d H:i:s')
			]);
			if(empty($bannerId)){
				return response()->json(['status' => StatusCodeConfig::CONST_VALIDATE_ERRORS], 422);
			}
			return response()->json(['status' => true], 200);
		}
	}
}
