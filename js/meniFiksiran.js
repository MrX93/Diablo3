$(document).ready(function () {
	var nav = $('#nav');
	var banner = $('#header');
	var pos = nav.position();

	$(window).scroll(function () {

		var windowpos = $(window).scrollTop();
		if (windowpos >= (banner.outerHeight() - 10))
		{
			nav.css({'position': 'fixed', 'top': '0px'});
		} else
		{
			nav.css({'position': 'absolute', 'top': '190px'});
		}
	});
});