<?php

namespace App\Http\Controllers\Backend\Rest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LayerModel;
use Validator;
use App\Libs\Config\StatusCodeConfig;

class LayerCtrl extends Controller
{
    private $layerModel;

	public function __construct(LayerModel $layerModel) {
		$this->layerModel = $layerModel;
	}

	public function info(Request $request){
		$type = $request->type;
		$dataInfo = $this->layerModel
		->filterType($type)
		->buildCond()->first();

		return response()->json($dataInfo);
	}

	public function update(Request $request){
		$type = $request->type;
		$dataInfo = $this->layerModel
		->filterType($type)
		->buildCond()->first();

		$titleMax = $request->input('titleMax','');
		$titleMin = $request->input('titleMin','');
		$content = $request->input('content','');
		$contentOne = $request->input('contentOne','');
		$contentTwo = $request->input('contentTwo','');
		$contentThree = $request->input('contentThree','');
		$contentFour = $request->input('contentFour','');
		$titleContentOne = $request->input('titleContentOne','');
		$titleContentTwo = $request->input('titleContentTwo','');
		$titleContentThree = $request->input('titleContentThree','');
		$titleContentFour = $request->input('titleContentFour','');
		if($dataInfo){
			if ($request->hasFile('avatar')) {

				$avatar_name = $request->avatar->store('public/layer');
			}else{
				$avatar_name = $dataInfo->avatar;
			}

			if ($request->hasFile('avatarOne')) {

				$avatar_name_one = $request->avatarOne->store('public/layer');
			}else{
				$avatar_name_one = $dataInfo->avatarOne;
			}

			if ($request->hasFile('avatarTwo')) {

				$avatar_name_two = $request->avatarTwo->store('public/layer');
			}else{
				$avatar_name_two = $dataInfo->avatarTwo;
			}

			if ($request->hasFile('avatarThree')) {

				$avatar_name_three = $request->avatarThree->store('public/layer');
			}else{
				$avatar_name_three = $dataInfo->avatarThree;
			}

			if ($request->hasFile('avatarFour')) {

				$avatar_name_four = $request->avatarFour->store('public/layer');
			}else{
				$avatar_name_four = $dataInfo->avatarFour;
			}

        //thuc hien update
			$dataInfo->titleMax = $titleMax;
			$dataInfo->titleMin = $titleMin;
			$dataInfo->content = $content;
			$dataInfo->contentOne = $contentOne;
			$dataInfo->contentTwo = $contentTwo;
			$dataInfo->contentThree = $contentThree;
			$dataInfo->contentFour = $contentFour;
			$dataInfo->avatar = $avatar_name;
			$dataInfo->type = $type;
			$dataInfo->titleContentOne = $titleContentOne;
			$dataInfo->titleContentTwo = $titleContentTwo;
			$dataInfo->titleContentThree = $titleContentThree;
			$dataInfo->titleContentFour = $titleContentFour;
			$dataInfo->avatarOne = $avatar_name_one;
			$dataInfo->avatarTwo = $avatar_name_two;
			$dataInfo->avatarThree = $avatar_name_three;
			$dataInfo->avatarFour = $avatar_name_four;
			$dataInfo->updated_at = Date('Y-m-d H:i:s');
			$dataInfo->save();

			return response()->json(['status' => true]);

		}else{
			$avatar_name = '';
			if ($request->hasFile('avatar')) {

				$avatar_name = $request->avatar->store('public/layer');
			}else{
				$avatar_name = '';
			}

			if ($request->hasFile('avatarOne')) {

				$avatar_name_one = $request->avatarOne->store('public/layer');
			}else{
				$avatar_name_one = '';
			}

			if ($request->hasFile('avatarTwo')) {

				$avatar_name_two = $request->avatarTwo->store('public/layer');
			}else{
				$avatar_name_two = '';
			}

			if ($request->hasFile('avatarThree')) {

				$avatar_name_three = $request->avatarThree->store('public/layer');
			}else{
				$avatar_name_three = '';
			}

			if ($request->hasFile('avatarFour')) {

				$avatar_name_four = $request->avatarFour->store('public/layer');
			}else{
				$avatar_name_four = '';
			}

        //thuc hien insert
			$getId = $this->layerModel->insertGetId([
				"titleMax" => $titleMax, 
				"titleMin" => $titleMin, 
				"content" => $content, 
				"contentOne" => $contentOne, 
				"contentTwo" => $contentTwo, 
				"contentThree" => $contentThree, 
				"contentFour" => $contentFour, 
				"avatar" => $avatar_name, 
				"type" => $type, 
				"titleContentOne" => $titleContentOne, 
				"titleContentTwo" => $titleContentTwo, 
				"titleContentThree" => $titleContentThree, 
				"titleContentFour" => $titleContentFour, 
				"avatarOne" => $avatar_name_one, 
				"avatarTwo" => $avatar_name_two, 
				"avatarThree" => $avatar_name_three, 
				"avatarFour" => $avatar_name_four, 
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
