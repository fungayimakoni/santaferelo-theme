
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
												echo '<li><a href="'.$item['profile_url'].'"><i class="fa '.$item['sites'].'" aria-hidden="true"></i></a>';
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
    wp_footer();?>


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
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY9DW3sn22Oxf_S0Qr-KjieIUvqrQrG4A&callback=initMap">
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
    <script>
      var _hmt = _hmt || [];
      (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?c91f9bdf9866288a9d3269023c747264";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
      })();
    </script>
   <script type="text/javascript" src='https://forms.zoho.eu/js/zf_gclid.js' defer></script>
   <script type="text/javascript" src='https://crm.zoho.eu/crm/javascript/zcga.js' defer> </script>
	</body>
</html>

