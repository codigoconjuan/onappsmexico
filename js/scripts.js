(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
                    var nav = $(".navbar-fixed-top");
                    $(window).scroll(function() {    
                        var scroll = $(window).scrollTop();

                        if (scroll >= 300) {
                            nav.addClass("scroll");
                        } else {
                            nav.removeClass("scroll");
                        }
                    });
		
	});
	
})(jQuery, this);
