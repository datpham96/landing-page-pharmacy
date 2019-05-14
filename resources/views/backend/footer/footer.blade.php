@extends('backend.Layouts.default')
@section('title' , 'Footer')
@section('myJs')

<!-- service -->
<script src="{{url('')}}/js/factory/service/backend/footerService.js"></script>
<!-- backend -->
<script src="{{ URL::asset('/js/ctrl/backend/footerCtrl.js') }}"></script>
@endsection

@section('content')


<div id="page-head">
	<!--Page Title-->
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div id="page-title">
		<h1 class="page-header text-overflow">Footer</h1>

	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<!--End page title-->
</div>
<div class="col-md-12" ng-controller="footerCtrl">
	<div class="panel panel-success">
		<div class="panel-body " >
			<form id="form-insert-post" ng-dom="formData">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-12">	
								<h4>Tiêu đề lớn</h4>	
								<input  ng-model="getData.title"  class="form-control" type="" name="" placeholder="Tiêu đề lớn">
							</div>

							<div class="col-md-12">
								<h4>Tên cửa hàng</h4>
								<input  ng-model="getData.nameStore"  class="form-control" type="text" name="" placeholder="Tên cửa hàng">
							</div>

							<div class="col-md-12">
								<h4>Địa chỉ</h4>
								<input ng-model="getData.address"  class="form-control" type="" name="" placeholder="Tên tiêu đề">
							</div>

							<div class="col-md-12">	
								<h4 class="pull-left">Ảnh footer (width: 440px, height: 400px)</h4>	
								<input onchange="readURL(this);" accept=".jpg, .png" class="form-control" type="file" name="avatar" id="upload-user" ng-model="getData.avatar">
								<img id="blah" style="margin-top: 20px; border: 1px solid #dcdcdc" class="avatar img-responsive" ng-src="@{{ actions.loadImage(getData.avatar) }}" alt="">
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