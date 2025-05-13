(function($) {
	'use strict';

	var countdown = {
		init: function() {
			this.start_countdown();
		},

		start_countdown: function() {
			if($(".countdown").length > 0 ) {
				$(".countdown").each(function (index,el){
					var _this = $(this),
						_expire = _this.data('expire');
						_this.countdown(_expire, function(event) {
							$(this).html(event.strftime('<span>%D</span> <span>%H</span> <span>%M</span> <span>%S</span>' ));
						});
				});
			}
		}
	}

	window.onload = function() {
		countdown.init();
	}
	
	$(document).ready(function() {
		countdown.onReady();
	});
	
	$(window).on("resize", function() {
		countdown.onResize();
	});

}) (window.Zepto || window.jQuery, window, document);



