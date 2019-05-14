<div class="clearfix"></div>
@if(app('Home')->getLayer('layerFour'))
<div class="us-horizone">
	<h1 class="u-h1">{!! app('Home')->getLayer('layerFour')->titleMax !!}</h1>
</div>
<div class="us-background">
	<div class="col-md-12">
		<div class="col-md-4 us-for-mar">
			<div class="us-scale">
				<div class="us-on">
					<p class="us-title">{!! app('Home')->getLayer('layerFour')->titleContentOne !!}</p>
				</div>
				<div class="us-behind">
					{!! app('Home')->getLayer('layerFour')->contentOne !!}
				</div>
			</div>
			
			<div class="clearfix"></div>
			<div class="us-scale us-mar-two">
				<div class="us-on" style="margin-top: 50px;">
					<p class="us-title">{!! app('Home')->getLayer('layerFour')->titleContentTwo !!}</p>
				</div>
				<div class="us-behind">
					{!! app('Home')->getLayer('layerFour')->contentTwo !!}
				</div>
			</div>			
		</div>
		<div class="col-md-4 img9931200">
			<img class="img-responsive" style="margin-top: 10px;" src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerFour')->avatar) }}" alt="anh">
		</div>
		<div class="col-md-4 us-for-mar">
			<div class="us-scale">
				<div class="us-on">
					<p class="us-title">{!! app('Home')->getLayer('layerFour')->titleContentThree !!}</p>
				</div>
				<div class="us-behind">
					{!! app('Home')->getLayer('layerFour')->contentThree !!}
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="us-scale">
				<div class="us-on" style="margin-top: 20px">
					<p class="us-title">{!! app('Home')->getLayer('layerFour')->titleContentFour !!}</p>
				</div>
				<div class="us-behind">
					{!! app('Home')->getLayer('layerFour')->contentFour !!}
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12" style="text-align: center;">
		<a class="btn btn-warning banner-buy button-buy992" style="background-color: rgba(255, 87, 34, 1);
		font-size: 18px;">ĐĂNG KÝ TƯ VẤN</a>
	</div>
</div>
@endif
<div class="clearfix"></div>