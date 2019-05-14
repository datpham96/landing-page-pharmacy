<div class="clearfix"></div>
@if(app('Home')->getFooter())
<div id="contact" ng-controller="contactCtrl">
	<div class="us-horizone c-horizone">
		<h1 class="u-h1" id="buy-now" style="color: #ffffff !important">{{ app('Home')->getFooter()->title }}</h1>
	</div>

	<div>
		<div class="col-lg-6 col-md-6 col-sm-12" style="margin: 0px auto;">
			<img src="{{ app('Home')->getUrlImage(app('Home')->getFooter()->avatar) }}" alt="anh" class="img-responsive" style="height: 400px;margin: 0px auto;">
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 contact-info">
			<div>
				<p class="contact-title">{{ app('Home')->getFooter()->nameStore }}</p><br>
				<p class="contact-address">{{ app('Home')->getFooter()->address }}</p>
			</div>
			<form class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="margin-top: 20px;">
				<div class="form-group">
					<label for="usr" class="contact-text">Họ Tên:</label>
					<input type="text" autocomplete="off" required ng-model="data.name" name="name" class="form-control" id="usr">
				</div>
				<div class="form-group">
					<label for="pwd" class="contact-text">Điện thoại:</label>
					<input type="text" autocomplete="off" required ng-model="data.phone" name="phone" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pwd" class="contact-text">Tình trạng da:</label>
					<input type="text" autocomplete="off" required ng-model="data.address" name="address" class="form-control" id="pwd">
				</div>
				<div>
					<button type="submit" style="margin-top: 15px;" class="btn btn-warning btn-buy form-control" ng-click="actions.sendOrder()">ĐĂNG KÝ TƯ VẤN</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endif
<div style="width: 100%; height: 30px; background-color: #aaaaaa; margin-top: -20px;">
	<p style="text-align: center; line-height: 30px; color: white">copyright &copy; Websiter, 2019</p>
</div>


<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon" style="right: 170px; bottom: 170px; position: fixed;">
	<div class="phonering-alo-ph-circle"></div>
	<div class="phonering-alo-ph-circle-fill"></div>
	<a href="tel:+84338077914"></a>
	<div class="phonering-alo-ph-img-circle">
		<a href="tel:+84338077914"></a>
		<a href="tel:+84338077914" class="pps-btn-img " title="LiÃªn há»‡">
			<img src="https://i.imgur.com/v8TniL3.png" alt="LiÃªn há»‡" width="30" onmouseover="this.src='https://i.imgur.com/v8TniL3.png';" onmouseout="this.src='https://i.imgur.com/v8TniL3.png';">
		</a>
	</div>
</div>
<a href="tel:+84338077914">
	<span style="right: 110px; bottom: 55px; position: fixed; background-color: rgba(51, 51, 51, 0.75); color: yellow; padding: 5px 10px; border-radius: 5px; font-size: 20px; z-index: 10000;"><strong>0338 077 914</strong></span></a>

<div class="go-up" style="display: block;">
	<a href="#"><i class="fa fa-chevron-up"></i></a>    
</div>