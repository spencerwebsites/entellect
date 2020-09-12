(function ($) {
	$(document).ready(function () {
		$('#menu-toggle').click(function () {
			$('#main-nav').toggleClass('hidden block');
			$('body').toggleClass('overflow-y-hidden');
		});

		$('#header .menu-item-has-children > span > a').click(function (e) {
			e.preventDefault();

			$(this).parent().next().toggleClass('block');
		});
	});
})(jQuery);
