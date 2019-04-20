
$(function(){
	$(() => $.imgPreview());
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-36251023-1']);
	_gaq.push(['_setDomainName', 'jqueryscript.net']);
	_gaq.push(['_trackPageview']);
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

	//pharmacy
	var h = $(window).height();
	var w = $(window).width();
	console.log(h);
	$(".p-banner img").height(h);
	$(".p-banner img").width(w);

	//scroll div animation
	$(".banner-buy").click(function() {
		$('html, body').animate({
			scrollTop: $("#buy-now").offset().top
		}, 1500);
	});

	$("#banner-docs").click(function() {
		$('html, body').animate({
			scrollTop: $("#continue-docs").offset().top
		}, 1500);
	});


	//scroll top
    if ($('.go-up a').length) {
        var scrollTrigger = 200, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('.go-up a').addClass('show');
            } else {
                $('.go-up a').removeClass('show');
            }
        };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('.go-up a').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 1500);
        });
    }
});
