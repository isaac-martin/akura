(function ($, root, undefined) {

$(document).ready(function(){

	        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".case-cont").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".case-cont").hasClass("hover")) {
                    $(this).closest(".case-cont").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".case-cont").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }

		if($('body').hasClass('single-casestudy')){
			$('.menu-item-101').addClass('current-menu-item');
			}


          $('#fullpage').fullpage({
        onLeave: function( index, nextIndex, direction){
            var leavingSection = $(this);

            //leaving the first slide of the 2nd Section to the right
            if(index == 1 && direction =='down'){
                $('.reveal2').addClass('reveal');
            }

            //leaving the 3rd slide of the 2nd Section to the left
            if(index == 2 && direction =='down'){
                $('.reveal3').addClass('reveal');
            }

             //leaving the 3rd slide of the 2nd Section to the left
            if(index == 3 && direction =='down'){
                $('.reveal4').addClass('reveal');
            }
        }
    });


	$('#category-menu li').on('click', function(){
	$(this).toggleClass('active').siblings().removeClass('active');
	$('.case-single').hide();
    if($(this).hasClass('all')) {
      $('.case-single').show();
    } else {
      var categoryId = $(this).data('category');
      $('.cat-'+ categoryId).show();
    }
  });





    });



setTimeout(function(){
    document.getElementById("video").play();
}, 500);






$(function() {

	$('.case-text').enscroll({
    showOnHover: true,
    verticalTrackClass: 'track3',
    verticalHandleClass: 'handle3'
});


	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('.mobile-menu').toggleClass('menu-vis');
	});

	$('.contact-text').html($('.underform-text').html());


	 $('.tagline').delay(2700).queue(function(){
        $(this).addClass('reveal');
    });

     $('.reveal1').delay(1200).queue(function(){
        $(this).addClass('reveal');
    });

    //Archive AJAX

    $('#post-content').on('click', '#pagination a', function(e){
		        e.preventDefault();
		        var link = $(this).attr('href');
		        $('#post-content').append('<div class="preloader loading"><span class="slice"></span><span class="slice"></span><span class="slice"></span><span class="slice"></span><span class="slice"></span><span class="slice"></span></div>');
					$('#post-content').fadeOut(1500, function(){
					$(this).load(link + ' #post-content', function() {
					$(this).fadeIn(1500);
            	});
        });

          });

    //Fullscreen Slider

    $('.fullscreen').on('click', function(){
	    $('.hide-elements').toggleClass('full-slider');
	    $('.switcher').toggleClass('icon-minus');

	});


     var owl = $('.case-slider');

    owl.owlCarousel({
	    	dotsContainer: '#owlDots',
			items : 1,
			autoplay : 3500,
			loop: true,
			animateOut : 'fadeOut'

    });


	owl.owlCarousel();
	// Go to the next item
	$('.right-arrow').click(function() {
	    owl.trigger('next.owl.carousel');
	});

	// Go to the previous item
	$('.left-arrow').click(function() {
	    owl.trigger('prev.owl.carousel');
	});

	$(document).keydown(function(e){


	        if(e.keyCode == 27) {
	            $('.hide-elements').removeClass('full-slider');
			     $('.switcher').removeClass('icon-minus');
	        }

	        var owl = $('.case-slider');

	          if (e.keyCode == 37) {
	         owl.trigger('prev.owl.carousel');
	    } else if (e.keyCode == 39) {
	        owl.trigger('next.owl.carousel');
	    }

	    });


	});









})(jQuery, this);
