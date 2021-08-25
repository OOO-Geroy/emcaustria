// load youtube iframe on click
(function($) {	$('body').on('click', '.k8_yt-link', function(event) {
		event.preventDefault();
		var $link = $(this),
				$wrr = $link.parents('.k8_yt-wrr'),
				url = $link.attr('href'),
				w = $wrr.width(),
				h = $wrr.height();

		// console.log(w);
		// console.log(h);

		var htm = '<iframe width="' + w + '" height="' + h + '" src="https://www.youtube.com/embed/' + url + '?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		$wrr.html(htm);
		return false;
	});
})( jQuery );