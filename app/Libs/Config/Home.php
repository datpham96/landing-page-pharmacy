<?php 

namespace App\Libs\Config;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\BannerModel;
use App\Models\CategoryModel;
use App\Models\FooterModel;
use App\Models\LayerModel;
use App\Models\LinkModel;
use Request;

class Home {
	
	private $bannerModel;
	private $categoryModel;
	private $layerModel;
	private $linkModel;
	private $footerModel;

	public function __construct(){
    	$this->bannerModel = new BannerModel();
    	$this->categoryModel = new CategoryModel();
    	$this->layerModel = new LayerModel();
    	$this->linkModel = new LinkModel();
    	$this->footerModel = new FooterModel();
    }

	public function getBanner(){
		$getBanner = $this->bannerModel->filterId(1)->buildCond()->first();

		return $this->getUrlImage($getBanner->avatar);
	}

	public function getLayer($type){
		$getLayer = $this->layerModel->filterType($type)
		->buildCond()->first();

		return $getLayer;
	}

	public function getFooter(){
		$getFooter = $this->footerModel->filterId(1)
		->buildCond()->first();

		return $getFooter;
	}

	public function getFeedBack(){
		$getLink = $this->linkModel->get();

		return $getLink;
	}

	public function getUrlImage($avatar){

		return url('') . "/file/avatar?data=" . $avatar;
	}
}