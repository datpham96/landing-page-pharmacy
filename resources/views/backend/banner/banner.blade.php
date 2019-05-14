@extends('backend.Layouts.default')
@section('title' , 'Banner')
@section('myJs')
<!-- service -->
<script src="{{url('')}}/js/factory/service/backend/bannerService.js"></script>
<!-- backend -->
<script src="{{ URL::asset('/js/ctrl/backend/bannerCtrl.js') }}"></script>
@endsection

@section('content')

<div id="page-head">
	<!--Page Title-->
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div id="page-title">
		<h1 class="page-header text-overflow">Banner</h1>

	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<!--End page title-->
</div>
<div class="col-md-12" ng-controller="bannerCtrl">
	<div class="panel panel-success">
		<div class="panel-body " >
			<form ng-enter="actions.update()" data-parsley-validate id="form-insert-post" ng-dom="formData">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-12">	
								<h4 class="pull-left">Ảnh banner (width: 1905px, height: 800px)</h4>
								<button class="btn btn-primary pull-right" ng-click="actions.update()">Cập nhật</button>	
								<input onchange="readURL(this);" accept=".jpg, .png" class="form-control" type="file" name="avatar" id="upload-user" ng-model="getData.avatar">
								<img id="max-size" style="margin-top: 20px; border: 1px solid #dcdcdc" class="avatar img-responsive" ng-src="@{{ actions.loadImage(getData.avatar) }}" alt="">
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