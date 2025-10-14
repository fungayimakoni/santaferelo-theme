
$(document).ready(function(){

	$(window).load(function(){
		AOS.init();
	});
	
	// CODES THAT INCLUDE ON LOAD AND RESIZE AT THE SAME TIME
	var resizeTimer;
	$(window).on('load resize', function(e){
		clearTimeout(resizeTimer);

		resizeTimer = setTimeout(function() {
			// Run code here, resizing has "stopped"
			var $pageHeight = $(window).height(),
			$pageWidth = $(window).width(),
			$navHeight = $('header.main-header').outerHeight(),
			$footerHeight = $('footer.footer').outerHeight(),
			$mainWrapper = $('.wrapper-holder');

			if( $mainWrapper.hasClass('not-sticky') ) {
				$('.wrapper-holder').css({
					'min-height': $pageHeight - $navHeight,
					'padding-bottom': $footerHeight
				});
			} else {
				$('.wrapper-holder').css({
					'min-height': $pageHeight - $navHeight,
					'padding-bottom': $footerHeight
				});
			}

			$('body.home main .wrapper-holder').css({
				'margin-top': 0,
				'height': $pageHeight,
				'min-height': 0,
			});

			/* MODERNIZR LAYOUT - This serves as the the media query inside the Javascript */
			if( Modernizr.mq('(min-width: 1200px)') ) {
				
			}
			else if( Modernizr.mq('(min-width: 992px)') && Modernizr.mq('(max-width: 1199px)') ) {
				// CODES FOR MEDIUM DEVICES HERE
				
			}
			else if( Modernizr.mq('(max-width: 991px)') && Modernizr.mq('(min-width: 768px)')){
				// CODES FOR SMALL DEVICES HERE

			}
			else{
				// CODES FOR EXTRA SMALL DEVICES HERE

			}

		}, 250);

	});
});
