$(document).ready(function() {
	var isTop = true;
	var top = $('.totop');

	$(window).on('scroll', function() {
		if ($(window).scrollTop() > 294) {
			isTop = false;
			top.fadeIn();
		} else {
			if (!isTop) {
				isTop = true;
				top.fadeOut();
			}
		}
	});

	top.on('click', function() {
		isTop = true;
		$('body').animate({scrollTop:0}, function() {
			top.fadeOut();
		});
	});
});