$(document).ready(function(){

	$(window).load(function(){
		AOS.init();
	});
	
	window.odometerOptions = {
	  format: '(,ddd)', // Change how digit groups are formatted, and how many digits are shown after the decimal point
	  duration: 20000, // Change how long the javascript expects the CSS animation to take
	  animation: 'count' // Count is a simpler animation method which just increments the value, use it when you're looking for something more subtle.
	};
	setTimeout(function(){
		$('.odometer').each(function(){
			$(this).text($(this).data('target'));
		});
	}, 5);

	$('.past .immigration').slick({
		slidesToShow: 4,
		autoplay: true,
  		autoplaySpeed: 2000,
  		infinite: true,
		speed: 300,
		arrows: true,
		prevArrow:'<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"><i class="material-icons">chevron_left</i></button>',
		nextArrow:'<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;"><i class="material-icons">chevron_right</i></button>',
		responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 4,
	      }
	    },
	    {
	      breakpoint: 769,
	      settings: {
	        slidesToShow: 2, 
	      }
	    },
	    {
	      breakpoint: 426,
	      settings: {
	        slidesToShow: 1, 
	      }
	    }
	  	]
	});
	$('.past .mobility').slick({
		slidesToShow: 4,
		autoplay: true,
  		autoplaySpeed: 2000,
  		infinite: true,
		speed: 300,
		arrows: true,
		prevArrow:'<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"><i class="material-icons">chevron_left</i></button>',
		nextArrow:'<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;"><i class="material-icons">chevron_right</i></button>',
		responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 4,
	      }
	    },
	    {
	      breakpoint: 769,
	      settings: {
	        slidesToShow: 2, 
	      }
	    },
	    {
	      breakpoint: 426,
	      settings: {
	        slidesToShow: 1, 
	      }
	    }
	  	]
	});
	$('.upcoming .immigration').slick({
		slidesToShow: 4,
		autoplay: true,
  		autoplaySpeed: 2000,
  		infinite: true,
		speed: 300,
		arrows: true,
		prevArrow:'<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"><i class="material-icons">chevron_left</i></button>',
		nextArrow:'<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;"><i class="material-icons">chevron_right</i></button>',
		responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 4,
	      }
	    },
	    {
	      breakpoint: 769,
	      settings: {
	        slidesToShow: 2, 
	      }
	    },
	    {
	      breakpoint: 426,
	      settings: {
	        slidesToShow: 1, 
	      }
	    }
	  	]
	});
	$('.upcoming .mobility').slick({
		slidesToShow: 4,
		autoplay: true,
  		autoplaySpeed: 2000,
  		infinite: true,
		speed: 300,
		arrows: true,
		prevArrow:'<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"><i class="material-icons">chevron_left</i></button>',
		nextArrow:'<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;"><i class="material-icons">chevron_right</i></button>',
		responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 4,
	      }
	    },
	    {
	      breakpoint: 769,
	      settings: {
	        slidesToShow: 2, 
	      }
	    },
	    {
	      breakpoint: 426,
	      settings: {
	        slidesToShow: 1, 
	      }
	    }
	  	]
	});
	$('.webinar-slide').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
  		autoplaySpeed: 5000,
  		asNavFor: '.nav-slide'
	});

	$('[href="#"]').on('click', function (e) {
	    setTimeout(function() {
		   $('.upcoming .mobility').slick("getSlick").refresh();
		   $('.upcoming .immigration').slick("getSlick").refresh();
		   $('.past .mobility').slick("getSlick").refresh();
		   $('.past .immigration').slick("getSlick").refresh();
		},100);
	});

	$(".country_flags-selecttop").msDropdown();

	var ip_check = Cookies.get('set_language');
	if ( !ip_check ){
		$('.off-canvas-ip').addClass('start').delay(3000).queue(function () {
	        $(this).addClass('done');
	        UIkit.sticky('.uk-sticky', {
			    top: 70
			});

	    });
	}
	
	$('li#menu-item-1871').after('<li><a href="#" class="language-refresh">Change Location</a></li>');
	$('li#menu-item-1871').after('<li><a href="#modal-internation" uk-toggle>Change Language</a></li>');
	$('.language-refresh').click(function(e){
		e.preventDefault();
		if( ip_check ){
			Cookies.remove('set_language');
		}
		location.reload();
	});


	// 8/5/2019 --updated  -Jan
	// $('#selectorform').submit(function(e) {
	// 	e.preventDefault();
	// 	if ($('.country_flags-selecttop option:selected').val() != '') {
	//    		Cookies.set('set_language', $('.country_flags-selecttop option:selected').val(), { expires: 7 });
	//    	};
	// 	location.reload();
	// 	$( '.off-canvas-ip' ).removeClass('done');
	// });

	$('#modal-country .button.launch').click(function(e) {
		e.preventDefault();
		if ($('#modal-country select option:selected').val() != '') {
	   		Cookies.set('set_language', $('#modal-country select option:selected').val(), { expires: 7 });
	   	};
		location.reload();
	});

	//end

	$( '#selectorform + a').click( function(e){
		e.preventDefault();
	});
	$( '.off-canvas-ip a' ).click( function(){
		$( '.off-canvas-ip' ).removeClass('done');
	});

	$('#selector .foobarsubmit .button').click(function(e) {
		e.preventDefault()
		window.location = $('#wpse34320_select option:selected').val(); 
	});

	$('#selector-contact-forms .foobarsubmit .button').click(function(e) {
		e.preventDefault()
		window.location = $('.contact-forms option:selected').val();  
	});

	$( "#4669447-A #submit_button" ).wrapAll( "<div class='affix-submit'></div>" );

	//disable free quote text link in all offices
	$(".product-services .container p a").css({"color":"#353c41", cursor: "default"}).click(function(e) {
		 e.preventDefault()
	; });

	//star rating
	$.fn.stars = function() {
    return $(this).each(function() {
        $(this).html($('<span />').width(Math.max(0, (Math.min(5, parseFloat($(this).html())))) * 29));
    });
	}

	$(function() {
	    $('span.stars').stars();
	});




	//date picker
	$(document).ready(function(){
    $("#tfa_733,#tfa_10,#movedate,#movedate2,#movedate3,#movedate12").datepicker({
      showOn: "both", 
      buttonText: "<i class='fas fa-calendar-alt' aria-hidden='true'></i>",
        startDate: '+1d',
        minDate: 0,
        weekStart: 1,
      dateFormat: 'dd-M-yy',
      onClose: function() {
	    	$("main").removeClass('unfocus');
	    },
       beforeShow: function (input, inst) {
        setTimeout(function () {
            inst.dpDiv.css({
                top: $("#tfa_733,#movedate,#movedate2,#movedate3").offset().top + 35,
                left: $("#tfa_733").offset().left
            });
        }, 0);
        $("main").addClass('unfocus');
	    }
    }).on("change", function(e){
        $(this).valid();
	    });
	});


	//readonly
	$(document).ready(function(){
	$("#tfa_733,#tfa_10").prop('readonly', true);
	 });
	
	
	//consent field
	//$('.calc-consentckbx').change(function() {
  //  var val = $(this).val();
	 // if( $(this).is(":checked") ) {

	//  $('.calc-consentrcvr').val('YES');
	 // }
	//	else {
	//		$('.calc-consentrcvr').val('No');
	//	}
	//});
	//
	
	$('.calc-consentbox.calcval-1').on('change', function() {
   	 $('.calc-consentbox.calcval-1').not(this).prop('checked', false);  
	});
	
	//consent field
	$('.calc-consentckbx').change(function() {
    var val = $(this).val();
	  if( $(this).is(":checked") ) {

	   $('.calc-consentrcvr').val('False');
	  }
		else {
			$('.calc-consentrcvr').val('True');
		}
	});
	
	//$("#tfa_5-L span").replaceWith("1 - Not likely");
	//force selection

	//online payment
	$('#full a').each(function(){
	this.href = this.href.replace("dpstpymnteur", "fllamnteur");
	});
	
	$('#dep a').each(function(){
	this.href = this.href.replace("fllamnteur", "dpstpymnteur");
	});

	$('#full-gbp a').each(function(){
	this.href = this.href.replace("dpstpymntgbp", "fllamntgbp");
	});
	
	$('#dep-gbp a').each(function(){
	this.href = this.href.replace("fllamntgbp", "dpstpymntgbp");
	});
	
	$('#dep-bank a').each(function(){
	this.href = this.href.replace("bnkfllpymenteur", "bnkdpstpymnteur");
	});
	
	$('#full-bank a').each(function(){
	this.href = this.href.replace("bnkdpstpymnteur", "bnkfllpymenteur");
	});

	$('#dep-bank-gbp a').each(function(){
	this.href = this.href.replace("bnkfllpymntgbp", "bnkdpstpymntgbp");
	});
	
	$('#full-bank-gbp a').each(function(){
	this.href = this.href.replace("bnkdpstpymntgbp", "bnkfllpymntgbp");
	});

	//

	$('#bank_t a').each(function(){
	this.href = this.href.replace("dpstpymntgbp", "bnkdpstpymntgbp");
	this.href += '&bank_name=UK Barclays GBP';
	});

	$('#credit_c a').each(function(){
	this.href = this.href.replace("bnkdpstpymntgbp", "dpstpymntgbp");
	});

	$('#bank_t_full a').each(function(){
	this.href = this.href.replace("fllamntgbp", "bnkfllpymntgbp");
	this.href += '&bank_name=UK Barclays GBP';
	});

	$('#credit_c_full a').each(function(){
	this.href = this.href.replace("bnkfllpymntgbp", "fllamntgbp");
	});

	$('#bank_t_dep_eur a').each(function(){
		this.href = this.href.replace("dpstpymnteur", "bnkdpstpymnteur");
		this.href += '&bank_name=UK Barclays EUR';
		});

	$('#credit_c_deposit_eur a').each(function(){
		this.href = this.href.replace("bnkdpstpymnteur", "dpstpymnteur");
		});

	$('#bank_t_full_eur a').each(function(){
		this.href = this.href.replace("fllamnteur", "bnkfllpymenteur");
		this.href += '&bank_name=UK Barclays EUR';
		});

	$('#credit_c_full_eur a').each(function(){
		this.href = this.href.replace("bnkfllpymenteur", "fllamnteur");
		});

	//cpq's

	//online payment
	$('#full-cpq a').each(function(){
	this.href = this.href.replace("dpstpymnteur-cpq", "fllamnteur-cpq");
	});
	
	$('#dep-cpq a').each(function(){
	this.href = this.href.replace("fllamnteur-cpq", "dpstpymnteur-cpq");
	});

	$('#full-gbp-cpq a').each(function(){
	this.href = this.href.replace("dpstpymntgbp-cpq", "fllamntgbp-cpq");
	});
	
	$('#dep-gbp-cpq a').each(function(){
	this.href = this.href.replace("fllamntgbp-cpq", "dpstpymntgbp-cpq");
	});
	
	$('#dep-bank-cpq a').each(function(){
	this.href = this.href.replace("bnkfllpymenteur-cpq", "bnkdpstpymnteur-cpq");
	});
	
	$('#full-bank-cpq a').each(function(){
	this.href = this.href.replace("bnkdpstpymnteur-cpq", "bnkfllpymenteur-cpq");
	});

	$('#dep-bank-gbp-cpq a').each(function(){
	this.href = this.href.replace("bnkfllpymntgbp-cpq", "bnkdpstpymntgbp-cpq");
	});
	
	$('#full-bank-gbp-cpq a').each(function(){
	this.href = this.href.replace("bnkdpstpymntgbp-cpq", "bnkfllpymntgbp-cpq");
	});

	//

	$('#bank_t-cpq a').each(function(){
	this.href = this.href.replace("dpstpymntgbp-cpq", "bnkdpstpymntgbp-cpq");
	this.href += '&bank_name=UK Barclays GBP';
	});

	$('#credit_c-cpq a').each(function(){
	this.href = this.href.replace("bnkdpstpymntgbp-cpq", "dpstpymntgbp-cpq");
	});

	$('#bank_t_full-cpq a').each(function(){
	this.href = this.href.replace("fllamntgbp-cpq", "bnkfllpymntgbp-cpq");
	this.href += '&bank_name=UK Barclays GBP';
	});

	$('#credit_c_full-cpq a').each(function(){
	this.href = this.href.replace("bnkfllpymntgbp-cpq", "fllamntgbp-cpq");
	});

	$('#bank_t_dep_eur-cpq a').each(function(){
		this.href = this.href.replace("dpstpymnteur-cpq", "bnkdpstpymnteur-cpq");
		this.href += '&bank_name=UK Barclays EUR';
		});

	$('#credit_c_deposit_eur-cpq a').each(function(){
		this.href = this.href.replace("bnkdpstpymnteur-cpq", "dpstpymnteur-cpq");
		});

	$('#bank_t_full_eur-cpq a').each(function(){
		this.href = this.href.replace("fllamnteur-cpq", "bnkfllpymenteur-cpq");
		this.href += '&bank_name=UK Barclays EUR';
		});

	$('#credit_c_full_eur-cpq a').each(function(){
		this.href = this.href.replace("bnkfllpymenteur-cpq", "fllamnteur-cpq");
		});

	//online payment services
	$("select#tfa_89 option, select#tfa_98 option").each(function(){
        var theText = $(this).html();
        $(this).addClass('serv_bul');
    });	

    $("#tfa_89 input:checkbox:not(:checked),#tfa_98 input:checkbox:not(:checked) ").hide().next('label').hide();


	//blueform script

$(function() {
    $("#SingleLine4, #SingleLine7").attr('data-geo', 'country');
	$("#SingleLine6, #SingleLine9").attr('data-geo', 'administrative_area_level_2');
    $("#SingleLine5, #SingleLine8").attr('data-geo', 'administrative_area_level_1');
});
$(function() {
    $("#SingleLine2").geocomplete({
        details: "#tfa_780",
        detailsAttribute: "data-geo"
    });

    $("#SingleLine1").geocomplete({
        details: "#tfa_781",
        detailsAttribute: "data-geo"
    });

});


$(window).resize(function() {
    if ($(window).width() < 768) {
        $("#tfa_788").geocomplete({
			details: "#tfa_780",
            detailsAttribute: "data-geo"
        });
		 $("#tfa_786").geocomplete({
			details: "#tfa_781",
            detailsAttribute: "data-geo"
        });
       // $("#tfa_11").replaceWith('<input id="tfa_11" name="tfa_11" type="text" class="required"/>');
        

        $("#tfa_788-D,#tfa_786-D").dialog({
            modal: true,
            autoOpen: false,
            buttons: [
            {
                    text: "DONE",
                    style:"margin:0;font-weight:bold",  
                    click: function(){
                    $('#tfa_1').val($('#tfa_788').val() + " ");
                    $('#tfa_3').val($('#tfa_786').val() + " ");
                   // $('#tfa_11').val($('#tfa_798 option:selected').text() + " ");
                    $(this).dialog("close");
                },

            }
            ],
            close: function() {
                $('tfa_786').val("");
                $('tfa_788').val("");
               // $('tfa_798').val("");
            }
        });


        $("#tfa_1").click(function() { $("#tfa_788-D").dialog("open"); });
        $("#tfa_3").click(function() { $("#tfa_786-D").dialog("open"); });
       // $("#tfa_11").click(function() { $("#tfa_798-D").dialog("open"); });

        $(".ui-dialog-titlebar").hide();
        $("#tfa_788-D").dialog("widget").find(".ui-dialog-buttonpane").css({"margin":"0 0 0 0"} );
    }
    else {

          $("#tfa_788-D,#tfa_786-D").dialog('destroy');
         // $('#tfa_11').val($('#tfa_798 option:selected').text() + " ");


    }
});

$(document).ready(function() {
    $(".wfPageNextButton").click(function() {
        $("#tfa_1").val("").attr("placeholder", "An error occured!").addClass("changePlaceColor1").addClass("changePlaceColor2").addClass("changePlaceColor3").addClass("changePlaceColor4");
    })
})

$(document).ready(function() {

    $("#submit_button").click(function() {
        ValidateForm();
    });

});

function ValidateForm() {

    var formInvalid = false;
    $('#4669530 input').each(function() {
        if ($(this).val() === '') {
            formInvalid = true;
        }
    });

    if (formInvalid)
    $('#tfa_23').attr('placeholder', 'Please enter first name');
    $('#tfa_25').attr('placeholder', 'Please enter last name');
    $('#tfa_26').attr('placeholder', 'Please enter email address');
    $('#tfa_27').attr('placeholder', 'Please enter phone number');
}

//end of blue form script


	//icon change class
	$(document).ready(function($) {
  	var alterClass = function() {
    var ww = document.body.clientWidth;
    if (ww > 767) {
      $('.icon-item .bordered div div').removeClass('uk-position-left');
    } else if (ww <= 767) {
      $('.icon-item .bordered div div ').removeClass('uk-position-center').addClass('uk-position-left');
    };
	  };
	  $(window).resize(function(){
	    alterClass();
	  });
	  //Fire it when the page first loads:
	  alterClass();
	});


	//pagination

	/*$(document).ready(function($) {
    var ww = document.body.clientWidth;
    if (ww > 767) {
    	$('.pagination').wp_bs_pagination({
        totalPages: 7,
        visiblePages: 3,
    	});
    }; 
	}); */

	 
	
	

	$('.local-offices button').click(function(e) {
		e.preventDefault()
		window.location = $('#select-page option:selected').val(); 
	});
	$('.destination-guide h3.title').html(function(){	
		// separate the text by spaces
		var text= $(this).text().split(' ');
		// drop the last word and store it in a variable
		var last = text.pop();
		// join the text back and if it has more than 1 word add the span tag
		// to the last word
		return text.join(" ") + (text.length > 0 ? ' <span class="last">'+last+'</span>' : last);   
	});
	$( ".top-header .primary a" ).clone().appendTo( ".mobile-menu .mobile-button-primary" );
	$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
		$('.uk-sticky').toggleClass('menu-open');
		$('#menu-main-menu .sub-menu').removeClass('show');
	});

	$( '#menu-main-menu li' ).each(function( ) {
	  	if ($(this).children('.sub-menu').length > 0) {
		    $(this).append('<i class="material-icons show-sub">chevron_right</i>');
		    var menu = $(this).children('a').text();
		    $(this).children('.sub-menu').prepend('<li class="back"><i class="material-icons show-sub">chevron_left</i>Back</li><li class="title">'+menu+'</li>');
		}
	});
	$(document).on('click', '.show-sub', function(){ 
	    $(this).prev().addClass('show');
	});
	$(document).on('click', 'li.back', function(){ 
	    $(this).parent().removeClass('show');
	});

    //$('.sidepanel').append("<li class='menu-item flag' id='menu-flag'><a href='#modal-country' uk-toggle=''>"+$flag+"<i class='material-icons'>language</i></a></li>");



	$('.sidepanel .sub-menu li a').append('<i class="material-icons show-sub">chevron_right</i>');
	$(window).on("load resize", function(){
		// var container = $('header.main-header .container').width();
		// $('.half-container').width( container / 2 );
		if( Modernizr.mq('(min-width: 1200px)') ) {
			var container = $('header.main-header .container').width();
			$('.half-container').width( container / 2 );
			$('.sidepanel').removeClass('sidepanel-out');
			$('#nav-icon1').removeClass('open');
		}
		else if( Modernizr.mq('(min-width: 960px)') && Modernizr.mq('(max-width: 1199px)') ) {
			// CODES FOR MEDIUM DEVICES HERE
			var container = $('header.main-header .container').width();
			$('.half-container').width( container / 2 );
			UIkit.sticky('.uk-sticky', {
				offset: 0,
    			top: 0
			});
		}
		else if( Modernizr.mq('(max-width: 959px)') ){
			// CODES FOR SMALL DEVICES HERE
			var container = $('header.main-header .container').width();
			$('.half-container').css('width', 'auto');
		}
		else{
			// CODES FOR EXTRA SMALL DEVICES HERE

		}
	});
});

//brower detection 
jQuery(function( $ ){
	var ua = detect.parse(navigator.userAgent);
	$('html').addClass(ua.browser.family.toLowerCase());
});

  var input = document.querySelector("#international_PhoneNumber_countrycode");
window.intlTelInput(input, {
        autoHideDialCode: false,
        autoPlaceholder: "polite",
          initialCountry: "auto",
  geoIpLookup: function(callback) {
    $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  },
    nationalMode: false,
  utilsScript: "utils.js?1562189064761" // just for formatting/placeholders etc
});