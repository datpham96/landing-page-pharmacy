<div class="clearfix"></div>
@if(app('Home')->getLayer('layerSix'))

<div class="u-horizone" style="background-color: #fff; border-bottom: none; line-height: 60px; padding-top: 20px">
	<h1 id="continue-docs" class="u-h1">{!! app('Home')->getLayer('layerSix')->titleMax !!}</h1>
</div>
<div class="clearfix"></div>
<div class="col-lg-12 col-md-12" style="padding-top: 30px;">
	<div class="col-md-6">
		<div class="col-md-8 y-text-3">
			<img data-toggle="modal" data-target="#myModal1" src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerSix')->avatarOne) }}" style=" width: 100%;" alt="anh" class="img-responsive">

		</div>
		<div class="col-md-"4>
			<div class="">
				<div class="" style="padding-bottom: 20px">
					<p class="">{!! app('Home')->getLayer('layerSix')->titleContentOne !!}</p>
				</div>
				<div class="">
					{!! app('Home')->getLayer('layerSix')->contentOne !!}
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-md-8 y-text-3">
			<img data-toggle="modal" data-target="#myModal2" src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerSix')->avatarTwo) }}" style=" width: 100%;" alt="anh" class="img-responsive">

		</div>
		<div class="col-md-4">
			<div class="">
				<div class="" style="padding-bottom: 20px">
					<p class="">{!! app('Home')->getLayer('layerSix')->titleContentTwo !!}</p>
				</div>
				<div class="">
					{!! app('Home')->getLayer('layerSix')->contentTwo !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix" style="padding-bottom: 30px;"></div>

<div class="modal fade" id="myModal1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Ảnh</h4>
			</div>
			<div class="modal-body">
				<img style="width: 100%" class="img-responsive" src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerSix')->avatarOne) }}" alt="Ảnh">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal2" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Ảnh</h4>
			</div>
			<div class="modal-body">
				<img style="width: 100%" class="img-responsive" src="{{ app('Home')->getUrlImage(app('Home')->getLayer('layerSix')->avatarTwo) }}" alt="Ảnh">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endif