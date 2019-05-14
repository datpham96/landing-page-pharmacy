<div class="clearfix"></div>
<div id="banner">
	<div class="banner-col-l col-md-12 col-sm-12">
		@if(app('Home')->getBanner())
		<img class="img-responsive" src="{{ app('Home')->getBanner() }} " alt="">
		@endif
		<div class="pos-banner">
			<a id="banner-docs" class="btn btn-success btn-doc" style="margin-right: 10px;">TÌM HIỂU THÊM</a>
			<a class="btn btn-warning btn-buy banner-buy">ĐĂNG KÝ TƯ VẤN</a>
		</div>
	</div>
	
	<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="position: absolute; bottom: 0; left: 0; ">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<a id="banner-docs" class="btn btn-success pull-right btn-doc">TÌM HIỂU THÊM</a>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<a class="btn btn-warning pull-left btn-buy banner-buy">ĐẶT MUA NGAY</a>
		</div>
	</div> -->
	<!-- <div class="banner-col-r col-md-12 col-sm-12">
		<div class="col-md-12">
			<img class="img-responsive" src="{{ url('') }}/images/logo-col-6.png" alt="">
		</div>
		
	</div> -->
</div>
<div class="clearfix"></div>