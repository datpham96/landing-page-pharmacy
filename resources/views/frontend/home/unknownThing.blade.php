
<div style="background-color: #770000 !important">
	@if(app('Home')->getLayer('layerOne'))
	<div class="u-horizone">
		<h1 id="continue-docs" class="u-h1">{!! app('Home')->getLayer('layerOne')->titleMax !!}</h1>
	</div>
	<div class="clearfix"></div>
	<div>
		<p class="u-parag" style="color: white !important; background-color:#770000 !important">

			<span >{!! app('Home')->getLayer('layerOne')->titleMin !!}</span>
			<!-- <span>cũng giống như việc cắt cỏ</span> -->
		</p>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" style="margin-top: 30px; padding-bottom: 30px">
		<div class="col-md-7">
			<img src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerOne')->avatar) }}" alt="anh" style=" width: 100%" class="img-responsive">
		</div>
		<div class="col-md-5 y-text1">
			<p class="u-two-parag un-font-text" style="color: #fff">
				{!! app('Home')->getLayer('layerOne')->content !!}
			</p>
		</div>
	</div>
	<div class="clearfix" style=""></div>
	@endif
	<div style="border-top: 1px dashed #dcdcdc; ">
		
	</div>
	@if(app('Home')->getLayer('layerTwo'))
	<div class="un-layer-two">
		<p class="u-parag" style="background-color: #fff;">
			<span >{!! app('Home')->getLayer('layerTwo')->titleMin !!}</span>
		</p>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 wrap-text">
		<div class="col-md-6 y-text2">
			<div class="u-two-parag" style="text-align: justify;">
				{!! app('Home')->getLayer('layerTwo')->content !!}
			</div>

		</div>
		<div class="col-md-6">
			<img src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerTwo')->avatar) }}" style=" width: 100%;" alt="anh" class="img-responsive fix-img1">
			
		</div>
	</div>
	@endif
	@if(app('Home')->getLayer('layerThree'))
	<div class="clearfix" style="background-color:#fff; padding-bottom: 15px"></div>
	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 wrap-text1" style="padding-top: 30px;">
		<div class="col-md-6 y-text-3">
			<img src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerThree')->avatar) }}" style=" width: 100%;" alt="anh" class="img-responsive">
			
		</div>
		<div class="col-md-6" style="color: #de5454">
			<div class="u-two-parag" style="text-align: justify;">
				{!! app('Home')->getLayer('layerThree')->content !!}
			</div>
		</div>
	</div>
</div>
<div class="clearfix" style="background-color: #fff3e0; padding-bottom: 15px; "></div>
@endif