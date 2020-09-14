jQuery(document).ready(function(){
	"use strict";
	/* =========================================================
	MAIN MENU
	============================================================ */
	// menu header top
	var example = jQuery('.header-top .main-menu').superfish({
	});
	jQuery('.header-top .mobile-menu > span').click(function () {
        var mobile_menu = jQuery('.header-top .toggle-view-menu');
        if (mobile_menu.is(':hidden')) {
            mobile_menu.slideDown('slow');
        } else {
            mobile_menu.slideUp('slow');
        }
    	jQuery(this).toggleClass('active');
    });

	jQuery('.header-top .toggle-view-menu h3').click(function (e) {
		e.preventDefault();
        var text = jQuery(this).parent().find('.menu-panel');
        if (text.is(':hidden')) {
            text.slideDown('slow');
            jQuery(this).parent().find('h3 span').html('-');
        } else {
            text.slideUp('slow');
            jQuery(this).parent().find('h3 span').html('+');
        }
    });

	// menu header bottom
	var example = jQuery('.header-bottom .main-menu').superfish({
	});
	jQuery('.header-bottom .mobile-menu > span').click(function () {
        var mobile_menu = jQuery('.header-bottom .toggle-view-menu');
        if (mobile_menu.is(':hidden')) {
            mobile_menu.slideDown('slow');
        } else {
            mobile_menu.slideUp('slow');
        }
    	jQuery(this).toggleClass('active');
    });

	jQuery('.header-bottom .toggle-view-menu h3').click(function (e) {
		e.preventDefault();
        var text = jQuery(this).parent().find('.menu-panel');
        if (text.is(':hidden')) {
            text.slideDown('slow');
            jQuery(this).parent().find('h3 span').html('-');
        } else {
            text.slideUp('slow');
            jQuery(this).parent().find('h3 span').html('+');
        }
    });
	
	// twitter
	if (jQuery('.tweets').length > 0) {
		jQuery('.tweets').tweetable({
			username: 'philipbeel', 
			time: true,
			rotate: false,
			speed: 4000, 
			limit: 3,
			replies: false,
			position: 'append',
			failed: "Sorry, twitter is currently unavailable for this user.",
			loading: "Loading tweets...",
			html5: true,
			onComplete:function(jQueryul){
				jQuery('time').timeago();
			}
		});
	};
	

	// tabs
	
	if ( jQuery(".kp-tabs").length > 0 ) {
		jQuery( ".kp-tabs" ).tabs();
	}

	// validate form
	if(jQuery(".comment-form").length > 0){
	    jQuery('.comment-form').validate({
	    // Add requirements to each of the fields
	    rules: {
	      name: {
	        required: true,
	        minlength: 2
	      },
	      email: {
	      required: true,
	      email: true
	      },
	      message: {
	      required: true,
	      minlength: 10
	      }
	    },
	    // Specify what error messages to display
	    // when the user does something horrid
	    messages: {
	      name: {
	        required: "Please enter your name.",
	        minlength: jQuery.format("At least {0} characters required.")
	      },
	      email: {
	      required: "Please enter your email.",
	      email: "Please enter a valid email."
	      },
	      url: {
	      required: "Please enter your url.",
	      url: "Please enter a valid url."
	      },
	      message: {
	      required: "Please enter a message.",
	      minlength: jQuery.format("At least {0} characters required.")
	      }
	    },
	    
	    // Use Ajax to send everything to processForm.php
	    submitHandler: function(form) {
	      jQuery("#input-submit").attr("value", "Sending...");
	      jQuery(form).ajaxSubmit({
		        success: function(responseText, statusText, xhr, jQueryform) {
		          jQuery("#response").html(responseText).hide().slideDown("fast");
		          jQuery("#input-submit").attr("value", "post comment");
		        }
	      });
	      return false;
	    }
		});
	}
	if(jQuery(".contact-form").length > 0){
	    jQuery('.contact-form').validate({
	    // Add requirements to each of the fields
	    rules: {
	      name: {
	        required: true,
	        minlength: 2
	      },
	      email: {
	      required: true,
	      email: true
	      },
	      message: {
	      required: true,
	      minlength: 10
	      }
	    },
	    // Specify what error messages to display
	    // when the user does something horrid
	    messages: {
	      name: {
	        required: "Please enter your name.",
	        minlength: jQuery.format("At least {0} characters required.")
	      },
	      email: {
	      required: "Please enter your email.",
	      email: "Please enter a valid email."
	      },
	      url: {
	      required: "Please enter your url.",
	      url: "Please enter a valid url."
	      },
	      message: {
	      required: "Please enter a message.",
	      minlength: jQuery.format("At least {0} characters required.")
	      }
	    },
	    
	    // Use Ajax to send everything to processForm.php
	    submitHandler: function(form) {
	      jQuery("#input-submit").attr("value", "Sending...");
	      jQuery(form).ajaxSubmit({
		        success: function(responseText, statusText, xhr, jQueryform) {
		          jQuery("#response").html(responseText).hide().slideDown("fast");
		          jQuery("#input-submit").attr("value", "post comment");
		        }
	      });
	      return false;
	    }
		});
	}
	// gallery
	// set item width

	var _gallery_width = jQuery('.kp-gallery').width();	
	var _item_width = _gallery_width / 4;
	var is_gallery_flex_auto = true;
	if (jQuery('.kp-gallery-carousel').length > 0) {
		jQuery('.kp-gallery-carousel').flexslider({
		    animation: "slide",
		    controlNav: false,
		    slideshow: is_gallery_flex_auto,
		    itemWidth: _item_width,		    
		    asNavFor: '.kp-gallery-slider',
		    start: function(slider){
		    	jQuery('body').removeClass('loading');
		    }		    		    

		  });
		  
		  jQuery('.kp-gallery-slider').flexslider({
		    animation: "slide",
		    controlNav: false,
		    slideshow: is_gallery_flex_auto,
		    sync: ".kp-gallery-carousel",
		    start: function(slider){
		      jQuery('body').removeClass('loading');

		        // status change caption
				jQuery('.status-caption').click(function(){
					
				  if (jQuery('.kp-gallery-caption').is(':visible')) {
				  	jQuery(this).text(jQuery(this).attr('data-show'));
				  	jQuery('.kp-gallery-caption').hide();
				  } else {
				  	jQuery(this).text(jQuery(this).attr('data-hide'));
				  	jQuery('.kp-gallery-caption').show();
				  }
					
				});
		        // status change slide
		        jQuery('.status-slide').click(function(){
			      	if (is_gallery_flex_auto) {		      		
				      	jQuery(this).text(jQuery(this).attr('data-play'));
				      	slider.pause();
				      } else {
				      	jQuery(this).text(jQuery(this).attr('data-pause'));
				      	slider.play();
				    }

				    is_gallery_flex_auto=!is_gallery_flex_auto;
			      
		        });
		        // count the number of images
		        var count;
		        count = slider.find('.slides > li').length;
		        jQuery('.total span').html(count);
		     
		    }
		  });
	};
	
		
	// caption normal
	if (jQuery('a.kp-caption').length>0 || jQuery('a.caption').length>0 || jQuery('a.kp-caption-2').length > 0 || jQuery('.widget-photos a.caption') > 0) {
		jQuery('a.caption').hover(function(){
			jQuery(this).find('p').stop(true).animate({'bottom':'0'},700);
			jQuery(this).find('span').stop(true).animate({'right':'-100%'},700);
		}, function(){
			jQuery(this).find('p').stop(true).animate({'bottom':'-100%'},700);
			jQuery(this).find('span').stop(true).animate({'right':'15px'},700);
		}
		);

		// caption style 2
		jQuery('a.kp-caption-2').hover(function(){
			jQuery(this).find('p').stop(true).animate({'right':'0'},700);
			jQuery(this).find('span').stop(true).animate({'right':'-100%'},700);
		}, function(){
			jQuery(this).find('p').stop(true).animate({'right':'-100%'},700);
			jQuery(this).find('span').stop(true).animate({'right':'15px'},700);
		}
		);

		
		// caption widget photo
		jQuery('.widget-photos a.caption').hover(function(){
			jQuery(this).find('h4,h3').stop(true).animate({'bottom':'0'},700);
			jQuery(this).find('span').stop(true).animate({'right':'-100%'},700);
		}, function(){
			jQuery(this).find('h4,h3').stop(true).animate({'bottom':'-100%'},700);
			jQuery(this).find('span').stop(true).animate({'right':'15px'},700);
		}
		);
		
	};


	// captionp multimedia
	if (jQuery('.multimedia a.caption').length > 0) {
		jQuery('.multimedia a.caption').hover(function(){
			jQuery(this).find('span').stop(true).show('500');
		}, function(){		
			jQuery(this).find('span').stop(true).show('500');
		}
		);
	};
	// caption related article
	if (jQuery('.owl-carousel-related a.caption').length > 0) {
		jQuery('.owl-carousel-related a.caption').hover(function(){
			jQuery(this).find('p').stop(true).animate({'bottom':'0'},700);
		}, function(){		
			jQuery(this).find('p').stop(true).animate({'bottom':'0'},700);
		}
		);
	};
	
	

	// video wrapper
	if (jQuery(".video-wrapper").length > 0) {
		jQuery(".video-wrapper").fitVids();
	};	
	
	// hide lable form
	if (jQuery('.comment-form .form-group').length > 0 || jQuery('.contact-form .form-group').length > 0) {
		jQuery('.comment-form .form-group,.contact-form .form-group').click(function(){
			jQuery(this).find('label').hide();
		});
	};
	
	// css
	if (jQuery('.widget-more-news > ul > li').length > 0) {
		jQuery('.widget-more-news > ul > li').each(function(index){
			jQuery(this).addClass('index'+index);
		});
	};
	/* =========================================================
	CAROSEL
	============================================================ */
	if (jQuery(".owl-carousel-text").length > 0) {
		jQuery(".owl-carousel-text").owlCarousel({
			 pagination:false,
			 items:5,
			 navigation : true,
			 slideSpeed : 700,
			 navigationText : ["",""]
		});
	};
	if (jQuery(".owl-carousel-images").length > 0) {
		   	jQuery(".owl-carousel-images").owlCarousel({
				singleItem:true,
				pagination:true,
				transitionStyle : "backSlide"
			});
	}
	if (jQuery(".owl-carousel-last-post").length > 0) {
		jQuery(".owl-carousel-last-post").owlCarousel({
			singleItem:true,
			pagination:false,
			navigation : true,
			slideSpeed : 700,
			navigationText : ["",""]
		});
	}


	if (jQuery(".owl-carousel-feature").length > 0) {
		jQuery(".owl-carousel-feature").owlCarousel({
			singleItem:true,
			pagination:false,
			navigation : true,
			navigationText : ["",""],
			mouseDrag: false,
			touchDrag: false,
			transitionStyle : "backSlide",
			afterUpdate: function(slider){
				imagesLoaded( slider, function() {		
				   	var container = slider.find('.item-wrapper');
					container.masonry({
					  itemSelector: '.item'
					});
				});
			}
		});
		imagesLoaded( '.owl-carousel-feature .item-wrapper', function() {		
		   	var container = jQuery('.owl-carousel-feature .item-wrapper');
			container.masonry({
			  itemSelector: '.item'
			});
		});
		
	}


	
	
	if (jQuery(".owl-carousel-photos").length > 0) {
		jQuery(".owl-carousel-photos").owlCarousel({
			singleItem:true
		});
	};
	
	if (jQuery(".owl-carousel-related").length > 0) {
		jQuery(".owl-carousel-related").owlCarousel({
			items:4,
			pagination:false,
			navigation : true,
			navigationText : ["",""]
		});
	};
	
	// masonry

	if (jQuery('.page-full-width .list-posts-cat').length > 0) {
		imagesLoaded( '.page-full-width .list-posts-cat', function() {		
		   	var container = jQuery('.page-full-width .list-posts-cat');
			container.masonry({
			  itemSelector: '.item'
			});
		});
	};
});

// google map
	

if (jQuery('#area-map').length > 0) {
	google.maps.visualRefresh = true;
	var map_y =21.027266;
	var map_x =105.855451;
	var ha_noi = new google.maps.LatLng(map_y,map_x );
	var map;
	function initialize() {
		var mapOptions = {
			zoom: 13,
			center: ha_noi
		};
		map = new google.maps.Map(document.getElementById('area-map'), mapOptions);
	}

	google.maps.event.addDomListener(window, 'load', initialize);
};