<div class="cleafix"></div>
<div style="border-top: 1px dashed #dcdcdc">
	
</div>
<div class="row">
<div class="us-horizone">
	<h1 class="u-h1">CHIA SẺ CỦA KHÁCH HÀNG?</h1>
</div>
<script>
	jQuery(document).ready(function ($) {
		var options = {
                $DragOrientation: 1,
                $AutoPlay: 1, 
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$('slider1_container', options);
        });
    </script>
    
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 400px;
    height: 500px; margin: 0px auto;">

    <!-- Slides Container -->
    <div class="data-u" data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 400px; height: 500px;
    overflow: hidden;">
    @if( app('Home')->getFeedBack())
        @foreach(app('Home')->getFeedBack() as $val)
        <div><img data-u="image" alt="{{ $val->name }}" src="{{ app('Home')->getUrlImage($val->avatar) }}" /></div>
        @endforeach
    @endif
</div>

<style>
.jssora051 {display:block;position:absolute;cursor:pointer;}
.jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
.jssora051:hover {opacity:.8;}
.jssora051.jssora051dn {opacity:.5;}
.jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>
<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
	<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
	</svg>
</div>
<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
	<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
		<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
	</svg>
</div>
<!--#endregion Arrow Navigator Skin End -->
</div>
</div>