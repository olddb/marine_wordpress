(function ($, root, undefined) {
	$(function () {
		'use strict';
			
		// DOM ready, take it away

		function loop1() {
			$(".slider1").animate({ marginLeft: "-300px" }, 2000, function () {
				$(this).css({ marginLeft: 0 }).find("img:last").after($(this).find("img:first"));	
				setTimeout(loop1, 1000);
				});
		}
		loop1();

		function loop2() {
			$(".slider2").animate({ marginLeft: "-300px" }, 2000, function () {
				$(this).css({ marginLeft: 0 }).find("img:last").after($(this).find("img:first"));	
				setTimeout(loop2, 1000);
				});
		}
		setTimeout(loop2, 600);

		function loop3() {
			$(".slider3").animate({ marginLeft: "-300px" }, 2000, function () {
				$(this).css({ marginLeft: 0 }).find("img:last").after($(this).find("img:first"));	
				setTimeout(loop3, 1000);
				});
		}
		setTimeout(loop3, 1200);

		
	});
	
})(jQuery, this);