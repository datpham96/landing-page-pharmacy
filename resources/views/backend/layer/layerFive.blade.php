@extends('backend.Layouts.default')
@section('title' , 'Layer 5')
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
		<h1 class="page-header text-overflow">Layer 5</h1>

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
							<div class="col-md-12">	
								<h4>Tiêu đề lớn</h4>	
								<input  ng-model="getData.titleMax"  class="form-control" type="" name="" placeholder="Tiêu đề lớn">
							</div>

							<!-- <div class="col-md-12">	
								<h4>Tiêu đề nhỏ</h4>

								<textarea required class="my-ckeditor" ng-model="getData.titleMin">

								</textarea>
							</div> -->
							<div class="col-md-6">	
								<h4>Tiêu đề nội dung 1</h4>

								<textarea required class="my-ckeditor" ng-model="getData.titleContentOne">	
								</textarea>	
							</div>

							<div class="col-md-6">
								<h4 class="pull-left">Ảnh footer (width: 120px, height: 120px)</h4>	
								<input onchange="readUrlOne(this);" accept=".jpg, .png" class="form-control" type="file" name="avatarOne" id="upload-user-one" ng-model="getData.avatarOne">
								<img id="imgLoadOne" style="margin-top: 20px; border: 1px solid #dcdcdc" class="avatar-one img-responsive" width="120" height="120" ng-src="@{{ actions.loadImage(getData.avatarOne) }}" alt="">
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
								<h4 class="pull-left">Ảnh footer (width: 120px, height: 120px)</h4>	
								<input onchange="readUrlTwo(this);" accept=".jpg, .png" class="form-control" type="file" name="avatarTwo" id="upload-user-two" ng-model="getData.avatarTwo">
								<img id="imgLoadTwo" style="margin-top: 20px; border: 1px solid #dcdcdc" class="avatar-two img-responsive" width="120" height="120" ng-src="@{{ actions.loadImage(getData.avatarTwo) }}" alt="">
							</div>

							<div class="col-md-12">	
								<h4>Nội dung 2</h4>

								<textarea required class="my-ckeditor" ng-model="getData.contentTwo">

								</textarea>
							</div>
							<div class="col-md-6" style="border-top: 1px solid #dcdcdc; margin-top: 30px;">
								<h4>Tiêu đề nội dung 3</h4>

								<textarea required class="my-ckeditor" ng-model="getData.titleContentThree">
								</textarea>		
								
							</div>
							
							<div class="col-md-6">
								<h4 class="pull-left">Ảnh footer (width: 120px, height: 120px)</h4>	
								<input onchange="readUrlThree(this);" accept=".jpg, .png" class="form-control" type="file" name="avatarThree" id="upload-user-three" ng-model="getData.avatarThree">
								<img id="imgLoadThree" style="margin-top: 20px; border: 1px solid #dcdcdc" class="avatar-three img-responsive" width="120" height="120" ng-src="@{{ actions.loadImage(getData.avatarThree) }}" alt="">
							</div>

							<div class="col-md-12">	
								<h4>Nội dung 3</h4>

								<textarea required class="my-ckeditor" ng-model="getData.contentThree">

								</textarea>
							</div>
							<div class="col-md-6" style="border-top: 1px solid #dcdcdc; margin-top: 30px;">
								<h4>Tiêu đề nội dung 4</h4>

								<textarea required class="my-ckeditor" ng-model="getData.titleContentFour">	
									</textarea>
							
							</div>

							<div class="col-md-6">
								<h4 class="pull-left">Ảnh footer (width: 120px, height: 120px)</h4>	
								<input onchange="readUrlFour(this);" accept=".jpg, .png" class="form-control" type="file" name="avatarFour" id="upload-user-four" ng-model="getData.avatarFour">
								<img id="imgLoadFour" style="margin-top: 20px; border: 1px solid #dcdcdc" class="avatar-four img-responsive" width="120" height="120" ng-src="@{{ actions.loadImage(getData.avatarFour) }}" alt="">
							</div>

							<div class="col-md-12">	
								<h4>Nội dung 4</h4>

								<textarea required class="my-ckeditor" ng-model="getData.contentFour">


								</textarea>
							</div>

							<div class="col-md-12">	
								<h4 class="pull-left">Ảnh footer (width: 615px, height: 444px)</h4>	
								<input onchange="readURL(this);" accept=".jpg, .png" class="form-control" type="file" name="avatarData" id="upload-user-avatar" ng-model="getData.avatar">
								<img id="max-size" style="margin-top: 20px; border: 1px solid #dcdcdc" class="avatar-ava img-responsive" width="615" height="444" ng-src="@{{ actions.loadImage(getData.avatar) }}" alt="">
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