<?php 
		
		echo '</div>';
		/* Include file/slug from Theme Options Here */
		include(locate_template('inc/option-files.php'));

		if( get_field('opt_custom_footer', 'options') ):
      		include(locate_template('inc/custom-footer.php'));
    	else :
			echo '<footer class="footer">';
				echo '<div class="container">';
					echo '<div class="footer-menu" uk-grid>';
						if ( get_field('social_media', 'option') || has_nav_menu( 'footer-menu-1' ) ):
							echo '<div class="uk-width-expand">';
								if ( has_nav_menu( 'footer-menu-1' ) ):
									$menu = get_nav_menu_locations();
									$title = wp_get_nav_menu_object( $menu['footer-menu-1'] );
									echo '<h5>'.$title->name.'</h5>';
									$menuArgss = array(
									  'theme_location' => 'footer-menu-1',
									);
									wp_nav_menu( $menuArgss );
								endif;
								if ( get_field('social_media', 'option') ):
									echo '<div class="social-media">';
										echo '<ul class="uk-iconnav">';
											foreach ( get_field('social_media', 'option') as  $item ):
												echo '<li><a href="'.$item['profile_url'].'" target="_blank"><i class="fa '.$item['sites'].'" aria-hidden="true"></i></a>';
											endforeach;
										echo '</ul>';
									echo '</div>';
								endif;
							echo '</div>';
						endif;
						if ( has_nav_menu( 'footer-menu-2' ) ):
							echo '<div class="uk-width-expand">';
								$menu = get_nav_menu_locations();
								$title = wp_get_nav_menu_object( $menu['footer-menu-2'] );
								echo '<h5>'.$title->name.'</h5>';
								$menuArgss = array(
								  'theme_location' => 'footer-menu-2',
								);
								wp_nav_menu( $menuArgss );
							echo '</div>';
						endif;
						if ( has_nav_menu( 'footer-menu-3' ) ):
							echo '<div class="uk-width-expand">';
								$menu = get_nav_menu_locations();
								$title = wp_get_nav_menu_object( $menu['footer-menu-3'] );
								echo '<h5>'.$title->name.'</h5>';
								$menuArgss = array(
								  'theme_location' => 'footer-menu-3',
								);
								wp_nav_menu( $menuArgss );
							echo '</div>';
						endif;
						if ( has_nav_menu( 'footer-menu-4' ) ):
							echo '<div class="uk-width-expand">';
								$menu = get_nav_menu_locations();
								$title = wp_get_nav_menu_object( $menu['footer-menu-4'] );
								echo '<h5>'.$title->name.'</h5>';
								$menuArgss = array(
								  'theme_location' => 'footer-menu-4',
								);
								wp_nav_menu( $menuArgss );
							echo '</div>';
						endif;
					echo '</div>';
					echo '<div class="outer-footer">';
						echo '<div uk-grid>';
							if ( has_nav_menu( 'bottom-footer' ) ):
								echo '<div class="uk-width-2-3@m">';
									echo '<div class="footer-awards">';
										echo '<div>';
											//if ( get_field('footer_awards', 'option') ):
												echo '<div>';
													// echo '<ul class="uk-iconnav uk-flex-center">';
													// 	foreach ( get_field('footer_awards', 'option') as  $item ):
													// 		echo '<li><img src="'.$item['award_logo'].'" width="132" alt="footer logo"/></li>';
													// 	endforeach;
													$country = get_country();
													echo '<p>We adhere to the British Association of Removers Alternative Dispute Resolution Scheme which is independently operated by;</p>';
													echo '<ul class="awards-container">';
														echo '<li><a href="https://www.fhio.org/" target=_blank">
														<img src="'.get_stylesheet_directory_uri().'/img/rsz_tfo.jpg" alt="tfo">
														<p>Furniture & Home Improvement Ombudsman<br> 1-5 Argyle Way<br> Stevenage<br> Herts <br>SG1 2AD<br> W: www.fhio.org</p>
														</a>
														</li>';
														echo '<li><iframe frameborder="0" scrolling="no" allowTransparency="true" width="220" height="86" src="https://yoshki.com/badge-bar.html" style="border:0px;margin:0px;padding:0px;backgroundColor:transparent;"></iframe></li>';
														echo '<li><a href="https://bar.co.uk/advanced-payment-guarantee/" target="_blank"><img src="'.get_stylesheet_directory_uri().'/img/APGFinalLogo2020_Worldwide.jpeg" alt="apg"></a></li>';
														if($country =='FR')
														echo '<li><img src="'.get_stylesheet_directory_uri().'/img/france-index.png" alt="apg"><h1 style="color:#FFF">74/100</h1></li>';
														

													echo '</ul>';
												echo '</div>';
											//endif;
										echo '</div>';
									echo '</div>';
								echo '</div>';
							endif;
							if (get_field('company_footer', 'option')):
								echo '<div class="uk-width-1-3@m">';
									echo '<div>';
										$menuArgss = array(
										  'theme_location' => 'bottom-footer',
										  'menu_class' => 'uk-iconnav'
										);
										wp_nav_menu( $menuArgss );
									echo '</div>';
									echo '<div class="cookie-policy"><a href="https://www.santaferelo.com/en/cookies-policy/">Cookies Policy</a></div>';
									echo '<a href="#"
											onclick="window.displayPreferenceModal();return false;"
											id="termly-consent-preferences">Consent Preferences</a>';
									echo '<div>';
										echo get_field('company_footer', 'option');

									echo '</div>';
									echo '<div class="others" style="margin-top: 30px;">';
										echo '<p style="color: white;margin-bottom: 15px;">Accepted payment methods</p>';
										echo '<img src="'.get_stylesheet_directory_uri().'/img/payment-logo.png" alt="payment">';
									echo '</div>';
								echo '</div>';
							endif;
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</footer>';
		endif;
	echo '</main>';
	echo '<div id="modal-country" class="uk-flex-top" uk-modal>';
	    echo '<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">';
			echo '<button class="uk-modal-close-default" type="button" uk-close></button>';
			echo '<h3><span style="color: #353c41;">Select a location</span></h3>';
			echo '<span style="color: #353c41;">View content and offers specific to your location</span>';
			$country = get_country();
			$countries = get_field('country_languages', 'option');
			if( get_field('country_languages', 'option') && array_key_exists( $country, $countries) || ( $country == "PH" ) ):
				if( $country == "PH" ):
				  $add = array( 'PH' => 'Philippines' );
				  $countries = $countries + $add;
				endif;
				echo '<div class="select-container">';
					echo '<select>';
                          
                          foreach( $countries as $key=>$item ):
                            if($item == "Hong Kong SAR China"){
                              $item = 'Hong Kong';
                            };
                            // if($item == "India"){
                            //   $item = 'IND';
                            // };
                            // if($item == "Singapore"){
                            //   $item = 'SGP';
                            // };
                            // if($item == "Thailand"){
                            //   $item = 'THA';
                            // };
                            // if($item == "United Arab Emirates"){
                            //   $item = 'UAE';
                            // };
                            // if($item == "United Kingdom"){
                            //   $item = 'GBR';
                            // };
                            // if($item == "United States"){
                            //   $item = 'USA';
                            // };
                            // if($item == "Philippines"){
                            //   $item = 'PHL';
                            // };
                            $small = strtolower($key);
                            echo '<option '.( ( $country == $key ) ? 'selected="true"' : '' ).' value="'.$key.'" data-title="'.$item.'">'.$item.'</option>';
                          endforeach;
                        echo '</select>';
				echo '</div>';
				echo '<div>';
					echo '<div class="secondary button launch" style="margin-top: 24px;">&#8203;Continue</div>';
				echo '</div>';
			endif;
		echo '</div>';
	echo '</div>';
	echo '<div id="modal-internation" class="uk-flex-top" uk-modal>';
	    echo '<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" style="width: 343px; padding: 24px;">';
			echo '<button class="uk-modal-close-default" type="button" uk-close></button>';
			echo '<h3><span style="color: #353c41;">Select a language</span></h3>';
			echo '<span style="color: #353c41;">Choose a language from the list below and continue</span>';
			if(get_field('items_listing', 'options')):
				echo '<div class="select-container">';
					echo '<select class="country_flags-select">';
						foreach( get_field('items_listing', 'options') as $item ):
							echo '<option value="'.$item['link'].'">'.$item['name'].'</option>';
						endforeach;
					echo '</select>';
				echo '</div>';
				echo '<div>';
					echo '<div class="secondary button launch" style="margin-top: 24px;">&#8203;Continue</div>';
				echo '</div>';
			endif;
		echo '</div>';
	echo '</div>';
	echo '<div id="login-modal" class="uk-flex-top" uk-modal>';
	    echo '<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">';
			echo '<button class="uk-modal-close-default" type="button" uk-close></button>';
			echo '<h3><span style="color: #353c41;">Select login type</span></h3><p><span style="color: #353c41;"> If you haven’t received your login details then please get in touch with your relocation contact</span></p><p><span class="left-btn"><a href="https://portals.santaferelo.com/assignee/s/login/" target="_blank" class="secondary button" rel="noopener">Login as an assignee</a></span><span class="right-btn"><a href="https://portals.santaferelo.com/client/s/login/" target="_blank" rel="noopener" class="secondary button">Login as a client</a></span></p>';
		echo '</div>';
	echo '</div>';
	 echo '<div id="wechat-modal" class="uk-flex-top" uk-modal>';
	 	echo '<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">';
	 		echo '<button class="uk-modal-close-default" type="button" uk-close></button>';
	 			echo '<img src="/wp-content/uploads/2018/11/wechat_qrcode.jpg" alt="Santa Fe WeChat QR code"/>';
	 			echo '<div class="wechat_qr">';
	 			echo '<i class="fa fa-wechat" aria-hidden="true"></i><span>ID: SantaFeRelo</span>';
	 			echo '</div>';
	 	echo '</div>';
	echo '</div>';

	$country = get_country();
	
	if( $country == "CN"  ):
		if( is_front_page() ):
			echo '<div id="cn-modal" class="uk-flex-top" uk-modal>';
			    echo '<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">';
			    	echo '<div class="header-bg">';
						echo '<button class="uk-modal-close-default" type="button" uk-close></button>';
						echo '<h3>If you are in China, please select below.</h3>';
					echo '</div>';
					echo '<div class="cn-content uk-child-width-1-2" uk-grid>';
						echo '<div><a class="cta" href="https://www.santaferelo.com/cn/campaigns/moving-services-cn/moving-cn/">获得预估(报价)</a></div>';
						echo '<div><a class="cta" href="https://www.santaferelo.com/en/en-moving-abroad/">Get estimate</a></div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		?>
			<script type="text/javascript">
				//modal-gms 
				$(function() {
				    var modal = UIkit.modal("#cn-modal");
				    modal.show();
				});
			</script>
		<?php
		endif;
	endif;
	$countries = array('GB','US','DE','CH','FR','NL','ES','BE','LU','CZ','HU','PT','RO','BG','PL','SK','AT','FI','NO','SE','DK','IT','SG','TH','PH','BH','CF','JO','KE','KW','LB','OM','QA','SA','ZA','AE');
	
	$currentTZ = date_default_timezone_get();
	// set time to London
	date_default_timezone_set("	Europe/London");
	$now = strtotime('now');
	$launch = strtotime("October 4, 2021 9:00am");
	
	date_default_timezone_set($currentTZ);

	if(is_user_logged_in() || ($now >= $launch) ):

		if(in_array($country,$countries)):
			if( is_front_page() || is_page( array( 226, 382, 290, 325, 5196 ) ) ):
	
				$link = 'https://www.sanelo.com/';
				
				if( is_front_page() ):
					$link = 'https://www.sanelo.com/';
				elseif( is_page( 226 ) ):
					$link = 'https://www.sanelo.com/local-moving/';
				elseif( is_page( 382 ) ):
					$link = 'https://www.sanelo.com/international-moving/';
				elseif( is_page( 290 ) ):
					$link = 'https://www.sanelo.com/';
				elseif( is_page( 325 ) ):
					$link = 'https://www.sanelo.com/shipment-protection/';
				elseif( is_page( 5196 ) ):
					$link = 'https://www.sanelo.com/';
				endif;
				/*if(get_the_ID()==7422){
					echo '<div id="sanelo-modal" class="uk-flex-top '.date("F j, Y, g:i a",$now) .' " uk-modal>';
						echo '<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical -'.date("F j, Y, g:i a",$launch).'">';
							echo '<div class="desktop">';
								echo '<div class="header-bg">';
									echo '<button class="uk-modal-close-default" type="button" uk-close></button>';
									echo '<h3>Moving brands—Santa Fe Relocation to Sanelo</h3>';
									echo '<h2>We’ve created a <span class="green">fresh</span>  new brand</h2>';
									echo '<h2><span class="blue">purely</span> for personal move customers</h2>';
								echo '</div>';
								echo '<img src="'.get_stylesheet_directory_uri().'/img/illus1.svg" width="433" height="280" class="uk-preserve" uk-svg>';
								echo '<h4>Let’s get moving</h4>';
								echo '<div class="cn-content uk-child-width-1-2" uk-grid>';
									echo '<div><button class="cta two" type="button">Continue with Santa Fe</button></div>';
									echo '<div><a class="cta" href="'.$link.'">Go to Sanelo website</a></div>';
								echo '</div>';
							echo '</div>';
							echo '<div class="mobile">';
								echo '<div class="header-bg">';
									echo '<button class="uk-modal-close-default" type="button" uk-close></button>';
									echo '<h3>Santa Fe Relocation to Sanelo</h3>';
									echo '<h2>We’ve created a <span class="green">fresh</span>  new brand <span class="blue">purely</span> for personal move customers</h2>';
								echo '</div>';
								echo '<img src="'.get_stylesheet_directory_uri().'/img/Groupmobile.svg" width="285" height="135" class="uk-preserve" uk-svg>';
								echo '<h4>Move home happy</h4>';
								echo '<div class="cn-content">';
									echo '<div><a class="cta" href="'.$link.'">Go to Sanelo website</a></div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
					
				}*/
				?>
				<script type="text/javascript">
					//modal-gms 
					$(function() {
						//only once to show remove conditional if everypageload
						//if(localStorage.getItem('popState') != 'shown'){
							var modal = UIkit.modal("#sanelo-modal");
							modal.show();
							localStorage.setItem('popState','shown')
	
						//}
						$('.cta.two').on('click', function() {
						  modal.toggle();
						});
					});
				</script>
				
			<?php
			endif;
		endif; 
	endif;

	// if( ( is_page(777) || is_post_type_archive('mobility-webinar') || is_post_type_archive('mobility-events') || is_post_type_archive('mobility-wpapers') ) ):
	// 	echo '<div id="gms-modal2021" class="uk-flex-top" uk-modal>';
	// 	    echo '<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical container">';
	// 	    	echo '<button class="uk-modal-close-default" type="button" uk-close></button>';
	// 	    	echo '<div class="uk-child-width-1-2@m" uk-grid>';
													
	// 				echo '<div class="uk-flex uk-flex-middle">';
	// 					echo '<div>';
	// 						echo '<img src="'.get_stylesheet_directory_uri().'/img/santa_fe_savanta_gms_screen_focus_black_start_the_survey_1200x627px.jpg">';
	// 					echo '</div>';	
	// 				echo '</div>';
				
	// 				echo '<div>';
	// 					echo '<h3>Santa Fe Relocation’s Global Mobility Survey 2021/22 – Complete the Survey!</h3>';
	// 					echo '<p>Our 2021 survey is now live, and we’re inviting HR and Global mobility professionals to contribute:
	// 					share your insights and help uncover trends, hot topics and emerging issues in the industry.</p>';

	// 					echo '<p>The survey is available in five languages: English, Portuguese, Spanish, French and Chinese.
	// 					It will only take 15 minutes to complete.</p>';

	// 					echo '<p>Take part for your chance to receive an exclusive pre-publication copy of the report 
	// 					and be entered into a prize draw to win one of ten £50 Amazon vouchers.
	// 					The research is independently conducted on our behalf by Savanta.</p>';
						
						
	// 					echo '<div class="buttons-row">';
							
	// 						echo '<a class="video" href="https://survey.savanta.com/?id=56d23d9c6eSa63aa36c ">Take the survey</a>';
							
	// 					echo '</div>';
						
	// 				echo '</div>';
						
	// 			echo '</div>';
	// 		echo '</div>';
	// 	echo '</div>';
	//
	// endif;
	?>
	<div class="notification">
	<div class="notice">
	Hello, just to let you know we are not providing services to the selected location at the moment.
	<div class="meta-info hidden" aria-hidden="true"></div>
	<button class="uk-button" id="close-notice">Close</button>
	</div>

</div>
<style>
	.awards-container {
		display: flex;

	}
	@media (max-width: 480px) {
		.awards-container {
		flex-direction:column;
		margin-top:1.5rem;
		margin-bottom:1.5rem;

	}
	}
	.notification{
		background: rgba(0, 0, 0, 0.5);
		
		position: absolute;
		top:0;
		bottom:0;
		left: 0%;
		right: 0;
	    height: 100%;
		align-items:center;
		justify-content: center;
		display:none;
		z-index: 999999;
		

	}
	.notification.open{
		display:flex;
	}
	.notification .notice{
		width:100%;
		max-width: 474px;
		height:217px;
		box-sizing: border-box;
		border-radius: 47px;
		padding: 68px 60px;
		background: #FFF;
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		font-size: 16px;
		line-height: 24px;
		text-align: center;
		display: flex;
		flex-direction:column;
		align-items:center;
		justify-content: center;
		margin-top: 250px;
		font-weight: bold;

	}
	button#close-notice {
		background-color: #8E1E7D;
		color: #fff;
		border-radius: 41px;
		margin: 1rem 1rem 0;
		font-weight: bold;
	}
	body.scroll-lock{
		overflow:hidden;
	}
	@media (max-width: 480px) {
		.notification .notice{
			max-width:301px;
		}
	}
</style>
	<?php wp_footer();?>
	<script type="text/javascript">
		function setCookie(name, value, days){
		    var date = new Date();
		    date.setTime(date.getTime() + (days*24*60*60*1000)); 
		    var expires = "; expires=" + date.toGMTString();
		    document.cookie = name + "=" + value + expires + ";path=/";
		}

		// New code
		// #check
		(function($){
			function getGCLID(p){
				var url = new URL(window.location);
				var c = url.searchParams.get(p);
				return c;
			}
			$('#footer_gclid').val(getGCLID('gclid'));
			$('#footer_gclid2').val(getGCLID('gclid'));
		//         console.log($('#footer_gclid').val());
    	})(jQuery)

		function getParam(p){
		    var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
		    return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
		}
		var gclid = getParam('gclid');
		if(gclid){
		    var gclsrc = getParam('gclsrc');
		    if(!gclsrc || gclsrc.indexOf('aw') !== -1){
			    setCookie('gclid', gclid, 90);
			}
		}
		function readCookie(name) { 
			var n = name + "="; 
			var cookie = document.cookie.split(';'); 
			for(var i=0;i < cookie.length;i++) {      
			  var c = cookie[i];      
			  while (c.charAt(0)==' '){c = c.substring(1,c.length);}      
			  if (c.indexOf(n) == 0){return c.substring(n.length,c.length);} 
			} 
			return null; 
			} 

// 			window.onload = function() {      
// 			 			  document.getElementsByClassName("calc-gclidCL")[0].value = readCookie('gclid'); 

// 		} 
            document.addEventListener("DOMContentLoaded", function() {
				const el = document.getElementsByClassName("calc-gclidCL")[0];
				if (el) {
					el.value = readCookie('gclid');
				}
			});
	</script>
	<!-- <script type="text/javascript">
		_linkedin_partner_id = "1019785";
		window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
		window._linkedin_data_partner_ids.push(_linkedin_partner_id);
	</script>
	<script type="text/javascript">
		(function(){var s = document.getElementsByTagName("script")[0];
		var b = document.createElement("script");
		b.type = "text/javascript";b.async = true;
		b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
		s.parentNode.insertBefore(b, s);})();
	</script>
	<noscript>
		<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=1019785&fmt=gif" />
	</noscript> -->
	<!-- <script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?c91f9bdf9866288a9d3269023c747264";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script> -->

	<script>
      function initMap() {

        // Create a new StyledMapType object, passing it an array of styles,
        // and the name to be displayed on the map type control.
        var styledMapType = new google.maps.StyledMapType(
            [
              {
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#f5f5f5"
                  }
                ]
              },
              {
                "elementType": "labels.icon",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#616161"
                  }
                ]
              },
              {
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#f5f5f5"
                  }
                ]
              },
              {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#bdbdbd"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#eeeeee"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#757575"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#e5e5e5"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#ffffff"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#757575"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#dadada"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#616161"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              },
              {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#e5e5e5"
                  }
                ]
              },
              {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#eeeeee"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#c9c9c9"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              }
            ],
            {name: 'Styled Map'});
        var acflat = $('#map').data('lat');
        var acflng = $('#map').data('lng');
        // Create a map object, and include the MapTypeId to add
        // to the map type control.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: acflat, lng: acflng},
          zoom: 17,
          mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map']
          },
          disableDefaultUI: true
        });
        var icon = {
          // path: "M10,0.5 C6.41,0.5 3.5,3.39 3.5,6.98 C3.5,11.83 10,19 10,19 C10,19 16.5,11.83 16.5,6.98 C16.5,3.39 13.59,0.5 10,0.5 L10,0.5 Z",
          // fillColor: '#E32831',
          // fillOpacity: 1,
          // strokeWeight: 0,
          // scale: 2
          anchor: new google.maps.Point(48, 48),
          url: 'data:image/svg+xml;utf-8,<svg width="48" height="48" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path fill="#E32831" stroke="#E32831" stroke-width="1.01" d="M10,0.5 C6.41,0.5 3.5,3.39 3.5,6.98 C3.5,11.83 10,19 10,19 C10,19 16.5,11.83 16.5,6.98 C16.5,3.39 13.59,0.5 10,0.5 L10,0.5 Z"></path> <circle fill="#fff" stroke="#fff" cx="10" cy="6.8" r="2.3"></circle></svg>'
        }
        var marker = new google.maps.Marker({
          position: {lat: acflat, lng: acflng},
          map: map,          
        });
        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
      }
	 
	  
    </script>
	<script>
		const personalForm = document.getElementById('regForm');
		const nextBtn = personalForm.getElementById('nextBtn');
		const prevBtn = personalForm.getElementById('prevBtn');
		const submitBtn = personalForm.getElementById('submitBtn');
		// const formSteps = personalForm.querySelectorAll('.form-step');
	   nextBtn.addEventListener('click', function(event) {
			event.preventDefault();
			console.log('nextBtn clicked');
	   });
	</script>
    
    <?php
	
	get_template_part('parts/section-admin','template');
    if( is_page_template( 'template-corporate.php' ) ): ?>
   	 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDm9oF3WWbz0PvJoFZMXGs3KDJBo_Eb6zw&callback=initMap">
   	<?php
   	endif;
   	?>
	<?php 
	// <script type="text/javascript" src='https://forms.zoho.eu/js/zf_gclid.js' defer>
	// <script type="text/javascript" src='https://crm.zoho.eu/crm/javascript/zcga.js' defer>
	?>
	</body>
</html>