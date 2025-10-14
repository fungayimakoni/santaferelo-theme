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

					echo '<div class="footer-awards">';
						echo '<h5>Accreditations and memberships</h5>';
						echo '<div>';
							if ( get_field('footer_awards', 'option') ):
									echo '<div>';
										echo '<ul class="uk-iconnav uk-flex-center">';
											foreach ( get_field('footer_awards', 'option') as  $item ):
												echo '<li><img src="'.$item['award_logo'].'" width="132" alt="footer logo"/></li>';
											endforeach;
										echo '</ul>';
									echo '</div>';
								endif;
						echo '</div>';
					echo '</div>';

					

					echo '<div class="outer-footer">';
						echo '<div uk-grid>';
							if (get_field('company_footer', 'option')):
								echo '<div class="uk-width-1-3">';
									echo get_field('company_footer', 'option');
								echo '</div>';
							endif;
							if ( has_nav_menu( 'bottom-footer' ) ):
								echo '<div class="uk-width-2-3">';
									$menuArgss = array(
									  'theme_location' => 'bottom-footer',
									  'menu_class' => 'uk-iconnav'
									);
									wp_nav_menu( $menuArgss );
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
			echo '<h3><span style="color: #353c41;">Select a language</span></h3>';
			echo '<span style="color: #353c41;">Choose a language from the list below and continue</span>';
			if(get_field('items_listing', 'options')):
				echo '<div class="select-container">';
					echo '<select class="country_flags-select">';
						foreach( get_field('items_listing', 'options') as $item ):
							echo '<option data-thumbnail="/wp-content/uploads/2018/09/china.svg" value="'.$item['link'].'">'.$item['name'].'</option>';
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
	wp_footer();?>
<script type="text/javascript">
		function setCookie(name, value, days){
		    var date = new Date();
		    date.setTime(date.getTime() + (days*24*60*60*1000)); 
		    var expires = "; expires=" + date.toGMTString();
		    document.cookie = name + "=" + value + expires + ";path=/";
		}
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

			window.onload = function() {      
			 			  document.getElementsByClassName("calc-gclidCL")[0].value = readCookie('gclid'); 

		} 
	</script>
	<script type="text/javascript">
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
	</noscript>
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?c91f9bdf9866288a9d3269023c747264";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>

	</body>
</html>

