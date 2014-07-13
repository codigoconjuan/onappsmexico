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
                    
                    $('form').addClass('form-horizontal');
                    
                    $('ul#socialNav>li>a').text('');
                    
                    $(window).scroll(function(){
                        if($('section#servicios').isOnScreen()) {
                            $('section#servicios img').each(function(index) {
                                 $(this).delay(400*index).fadeIn('slow');
                            })
                        } else {

                        }
                    });

		
	});


        $.fn.isOnScreen = function(){

            var win = $(window);

            var viewport = {
                top : win.scrollTop(),
                left : win.scrollLeft()
            };
            viewport.right = viewport.left + win.width();
            viewport.bottom = viewport.top + win.height();

            var bounds = this.offset();
            bounds.right = bounds.left + this.outerWidth();
            bounds.bottom = bounds.top + this.outerHeight();

            return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom -100 < bounds.top || viewport.top > bounds.bottom));

        };


})(jQuery, this);


