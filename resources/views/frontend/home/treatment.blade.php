<div class="cleafix"></div>
@if(app('Home')->getLayer('layerFive'))
<div class="us-horizone">
	<h1 class="u-h1">{!! app('Home')->getLayer('layerFive')->titleMax !!}</h1>
</div>
<!-- <div class="tr-img">
	<img src="{{ url('') }}/images/lieu-trinh-1.png" alt="" class="img-responsive">
</div> -->
<div class="wrap-list-tr" style="display: none;">
	<div class="container">
		<div class="tr-wrap-img">
			<img src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerFive')->avatarOne) }}" class="img-thumbnail" alt="Cinque Terre" style="height: 120px; width: 120px; float: left">
			<div class="tr-title">
				{!! app('Home')->getLayer('layerFive')->titleContentOne !!}
			</div>
			<div class="tr-content">
				{!! app('Home')->getLayer('layerFive')->contentOne !!}
			</div>
		</div>
	</div>
	<div class="clearfix" style="border-top: 1px dashed #aaaaaa; margin-left: 15px; margin-right: 15px;">
	</div>
	<div class="container">
		<div class="tr-wrap-img">
			<img src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerFive')->avatarTwo) }}" class="img-thumbnail" alt="Cinque Terre" style="height: 120px; width: 120px; float: left">
			<div class="tr-title">
				{!! app('Home')->getLayer('layerFive')->titleContentTwo !!}
			</div>
			<div class="tr-content">
				{!! app('Home')->getLayer('layerFive')->contentTwo !!}
			</div>
		</div>
	</div>
	<div class="clearfix" style="border-top: 1px dashed #aaaaaa; margin-left: 15px; margin-right: 15px;">
	</div>
	<div class="container">
		<div class="tr-wrap-img">
			<img src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerFive')->avatarThree) }}" class="img-thumbnail" alt="Cinque Terre" style="height: 120px; width: 120px; float: left">
			<div class="tr-title">
				{!! app('Home')->getLayer('layerFive')->titleContentThree !!}
			</div>
			<div class="tr-content">
				{!! app('Home')->getLayer('layerFive')->contentThree !!}
			</div>
		</div>
	</div>
	<div class="clearfix" style="border-top: 1px dashed #aaaaaa; margin-left: 15px; margin-right: 15px;">
	</div>
	<div class="container">
		<div class="tr-wrap-img">
			<img src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerFive')->avatarFour) }}" class="img-thumbnail" alt="Cinque Terre" style="height: 120px; width: 120px; float: left">
			<div class="tr-title">
				{!! app('Home')->getLayer('layerFive')->titleContentFour !!}
			</div>
			<div class="tr-content">
				{!! app('Home')->getLayer('layerFive')->contentFour !!}
			</div>
		</div>
	</div>
</div>


<div class="tr-wrap">
	<div class="row">
		<div class="col-lg-4 col-md-4 tr-phase">
			<div class="tr-phase-one" style="height: 250px;">
				<div class="tr-phase-title">
					{!! app('Home')->getLayer('layerFive')->titleContentOne !!}
				</div>
				<div class="tr-phase-content">
					{!! app('Home')->getLayer('layerFive')->contentOne !!}
				</div>
			</div>
			<div class="tr-phase-two" style="height: 200px;">
				<div class="tr-phase-title">
					{!! app('Home')->getLayer('layerFive')->titleContentTwo !!}
				</div>
				<div class="tr-phase-content">
					{!! app('Home')->getLayer('layerFive')->contentTwo !!}
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4">
			<img style="min-height: 300px" class="img-responsive tr-img" src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerFive')->avatar) }}" alt="">
		</div>
		<div class="col-lg-4 col-md-4 tr-phase">
			<div class="tr-phase-three" style="height: 250px;">
				<div class="tr-phase-title">
					{!! app('Home')->getLayer('layerFive')->titleContentThree !!}
				</div>
				<div class="tr-phase-content">
					{!! app('Home')->getLayer('layerFive')->contentThree !!}
				</div>
			</div>
			<div class="tr-phase-four" style="height: 200px;">
				<div class="tr-phase-title">
					{!! app('Home')->getLayer('layerFive')->titleContentFour !!}
				</div>
				<div class="tr-phase-content">
					{!! app('Home')->getLayer('layerFive')->contentFour !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endif
<div class="clearfix"></div>