import jQuery from 'jquery';
/*!
 * jQuery Brazzers Carousel v1.0.0 (http://webdesign-master.ru)
 * Copyright 2015 WebDesign Master.
 */
 (function($) {

 	$.fn.brazzersCarousel = function() {

 		return this.addClass("brazzers-daddy").append("<div class='tmb-wrap'><div class='tmb-wrap-table'> ").append("<div class='image-wrap'>").append("<div class='bullets-wrap'>").each(function() {
 			var this_wrapper = $(this);
 			this_wrapper.find("img").appendTo(this_wrapper.find(".image-wrap")).each(function() {
 				this_wrapper.find(".tmb-wrap-table").append("<div>");
 				this_wrapper.find(".bullets-wrap").append("<div>");
 			});
 		}).find(".tmb-wrap-table div").hover(function() {
 			var this_img = $(this).parent(".tmb-wrap-table").closest(".brazzers-daddy").find("img");
 			var all_bullet = $(this).closest('.brazzers-daddy').find(".bullets-wrap").find("div");
 			var all_thmbs = $(this).parent(".tmb-wrap-table").find("div");
 			this_img.hide().eq($(this).index()).css("display", "block");
 			all_thmbs.removeClass("active");
 			$(this).addClass("active");

 			all_bullet.removeClass('active').eq($(this).index()).addClass('active');

 		}).parent().find(":first").addClass("active").closest('.brazzers-daddy').find('.bullets-wrap').find(":first").addClass('active');

 	};

 })(jQuery);

