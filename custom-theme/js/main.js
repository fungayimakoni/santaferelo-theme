$(document).ready(function(){
	$(window).load(function(){
		
		// Animate on Scroll Initialize
		AOS.init();
		/* Demo Scripts for Bootstrap Carousel and Animate.css article
		* on SitePoint by Maria Antonietta Perna
		*/
	    //Function to animate slider captions 
	    function doAnimations( elems ) {
	        //Cache the animationend event in a variable
	        var animEndEv = 'webkitAnimationEnd animationend';
	        
	        elems.each(function () {
	            var $this = $(this),
	                $animationType = $this.data('animation');
	            $this.addClass($animationType).one(animEndEv, function () {
	                $this.removeClass($animationType);
	            });
	        });
	    }
	    
	    //Variables on page load 
	    var $myCarousel = $('.carousel'),
	        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
	        
	    //Initialize carousel 
	    $myCarousel.carousel();
	    
	    //Animate captions in first slide on page load 
	    doAnimations($firstAnimatingElems);
	    
	    //Pause carousel  
	    $myCarousel.carousel('pause');
	    
	    
	    //Other slides to be animated on carousel slide event 
	    $myCarousel.on('slide.bs.carousel', function (e) {
	        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
	        doAnimations($animatingElems);
	    });

		var $tables = $('table');

		if( $tables ) {
			$tables.wrap('<div class="table-responsive"></div>');
			$tables.addClass('table');
		}

		$('.loader-overlay').fadeOut(200);

		// HASH SCROLLING EFFECT
		// var hashURL = location.hash;

		// if(hashURL != '' || hashURL.length > 1){

		// 	$('html, body').scrollTop(0);
		// 	$('html').css({display: 'block'});
		// 	smoothScrollTo(hashURL);
		// } else {
		// 	$('html').css({display: 'block'});
		// }

		// MOBILE MENU LAYOUT
		$('.sidepanel .menu > .menu-item-has-children').addClass('dropdown row-size');
		$('.sidepanel .menu > .menu-item-has-children > a').each(function(){
			var $curr = $(this);
			$curr.addClass('column-top nav-title');
			//$('<span class="fa fa-plus dropdown-toggle nav-control column-top" data-toggle="dropdown" style="min-height: '+ $curr.outerHeight() +'px;"></span>').insertAfter( $curr );
			$('<span class="dropdown-toggle nav-control column-top" data-uk-icon="icon: plus" data-toggle="dropdown" style="min-height: '+ $curr.outerHeight() +'px;"></span>').insertAfter( $curr );			
		});
		$('.sidepanel .menu > .menu-item-has-children > .sub-menu').addClass('dropdown-menu');
		// MOBILE MENU
		if(!$('.sidepanel').hasClass('sidepanel-out')){
			$('.close-sidemenu').hide();
		}
		$('.mobile-menu-btn').click(function(){
			$('.sidepanel').toggleClass("sidepanel-out" , 1000);
			$(this).toggleClass('toggle-mobile-menu', 1000);
			if(!$('.sidepanel').hasClass('sidepanel-out')){
				$('.close-sidemenu').hide();
			} else {
				$('.close-sidemenu').show();
			}
		});
		$('.sidepanel .mobile-menu-btn').click(function(){
			$('.main-header .mobile-menu-btn').toggleClass('toggle-mobile-menu', 1000);
		});
		$('.close-sidemenu').click(function(){
			$('.sidepanel').toggleClass("sidepanel-out", 1000);
			$(this).hide();
		});
		$('.sidepanel li a').click(function(){
			$(this).find('.fa-plus').toggleClass('fa-minus');
		});

		// BACK TO TOP
		$('.back-to-top').hide(); // HIDE ON FIRST LOAD
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.back-to-top').fadeIn();
			} else {
				$('.back-to-top').fadeOut();
			}
		});
		$('.back-to-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

	// CODES THAT INCLUDE ON LOAD AND RESIZE AT THE SAME TIME
	$(window).on('load resize', function(){
		// var $pageHeight = $(window).height(),
		// $pageWidth = $(window).width(),
		// $navHeight = $('header.main-header').outerHeight(),
		// $footerHeight = $('footer.footer').outerHeight(),
		// $mainWrapper = $('.wrapper-holder');

		// if( $mainWrapper.hasClass('not-sticky') ) {
		// 	$('.wrapper-holder').css({
		// 		'min-height': $pageHeight - $navHeight,
		// 		'padding-bottom': $footerHeight + 20
		// 	});
		// } else {
		// 	$('.wrapper-holder').css({
		// 		'min-height': $pageHeight - $navHeight,
		// 		// 'margin-top': $navHeight,
		// 		'padding-bottom': $footerHeight + 20
		// 	});
		// }
		// ARCHIVE PAGE
		var $archItem = 0;
		$('.archive-box-layout .archive-item').each(function(){
			var $archInner = $(this).find('.archive-inner').height();
			if( $archInner > $archItem ) { $archItem = $archInner; }
		});

		/* MODERNIZR LAYOUT - This serves as the the media query inside the Javascript */
		if( Modernizr.mq('(min-width: 1200px)') ) {
			$('.archive-box-layout .archive-item .archive-inner').height( $archItem );
		}
		else if( Modernizr.mq('(min-width: 992px)') && Modernizr.mq('(max-width: 1199px)') ) {
			// CODES FOR MEDIUM DEVICES HERE
			$('.archive-box-layout .archive-item .archive-inner').height( $archItem );
		}
		else if( Modernizr.mq('(max-width: 991px)') && Modernizr.mq('(min-width: 768px)')){
			// CODES FOR SMALL DEVICES HERE

		}
		else{
			// CODES FOR EXTRA SMALL DEVICES HERE

		}

	});
});

// FUNCTION LISTS
/*
* Method smooth scrolls to given anchor point
*/
function smoothScrollTo(anchor) {
	var duration = 400; //time (milliseconds) it takes to reach anchor point
	var targetY = $(anchor).offset().top;
	$("html, body").animate({
		"scrollTop" : targetY
	}, duration, 'easeInOutCubic');
}