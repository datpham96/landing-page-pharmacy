@extends('backend.Layouts.default')
@section('title' , 'Layer 6')
@section('myJs')

<!-- service -->
<script src="{{url('')}}/js/factory/service/backend/layerService.js"></script>
<!-- backend -->
<script src="{{ URL::asset('/js/ctrl/backend/layerCtrl.js') }}"></script>
@endsection

@section('content')


<div id="page-head">
	<!--Page Title-->
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div id="page-title">
		<h1 class="page-header text-overflow">Layer 6</h1>

	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<!--End page title-->
</div>
<div class="col-md-12" ng-controller="layerCtrl">
	<div class="panel panel-success">
		<div class="panel-body " >
			<form id="form-insert-post" ng-dom="formData">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<h4>Tiêu đề lớn</h4>

								<textarea required class="my-ckeditor" ng-model="getData.titleMax">

								</textarea>
							<div class="col-md-6">	
								<h4>Tiêu đề nội dung 1</h4>

								<textarea required class="my-ckeditor" ng-model="getData.titleContentOne">	
								</textarea>	
							</div>

							<div class="col-md-6">
								<h4 class="pull-left">Ảnh (width: 223px, height: 250px)</h4>	
								<input onchange="readUrlOne(this);" accept=".jpg, .png" class="form-control" type="file" name="avatarOne" id="upload-user-one" ng-model="getData.avatarOne">
								<img id="imgLoadOne" style="margin-top: 20px; border: 1px solid #dcdcdc" class="avatar-one img-responsive" width="223" height="250" ng-src="@{{ actions.loadImage(getData.avatarOne) }}" alt="">
							</div>

							<div class="col-md-12">	
								<h4>Nội dung 1</h4>

								<textarea required class="my-ckeditor" ng-model="getData.contentOne">

								</textarea>
							</div>

							<div class="col-md-6" style="border-top: 1px solid #dcdcdc; margin-top: 30px;">
								<h4>Tiêu đề nội dung 2</h4>

								<textarea required class="my-ckeditor" ng-model="getData.titleContentTwo">
								</textarea>	
								
							</div>

							<div class="col-md-6">
								<h4 class="pull-left">Ảnh footer (width: 223px, height: 250px)</h4>	
								<input onchange="readUrlTwo(this);" accept=".jpg, .png" class="form-control" type="file" name="avatarTwo" id="upload-user-two" ng-model="getData.avatarTwo">
								<img id="imgLoadTwo" style="margin-top: 20px; border: 1px solid #dcdcdc" class="avatar-two img-responsive" width="223" height="250" ng-src="@{{ actions.loadImage(getData.avatarTwo) }}" alt="">
							</div>

							<div class="col-md-12">	
								<h4>Nội dung 2</h4>

								<textarea required class="my-ckeditor" ng-model="getData.contentTwo">

								</textarea>
							</div>

							<div class="col-md-12">
								<br>
								<br>	

								<button ng-click="actions.update()" class="btn btn-primary pull-right">Cập nhật</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>    
</div>


@endsection