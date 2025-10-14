<?php 
	add_action( 'wp_ajax_nopriv_ip_menu_hk', 'ip_menu_hk' );
	add_action( 'wp_ajax_ip_menu_hk', 'ip_menu_hk' );
	function ip_menu_hk() {
		$def = '<a href="https://www.santaferelo.com/en/moving/locally/">Domestic Moving</a>';
		$set = get_field('moving_pages', 'option');
		if ($set['hongkong']):
			echo '<a href="'.$set['hongkong']['url'].'">'.$set['hongkong']['title'].'</a>';
		else:
			echo $def;
		endif;
		die();
	}

	add_action( 'wp_ajax_nopriv_ip_menu_th', 'ip_menu_th' );
	add_action( 'wp_ajax_ip_menu_th', 'ip_menu_th' );
	function ip_menu_th() {
		$def = '<a href="https://www.santaferelo.com/en/moving/locally/">Domestic Moving</a>';
		$set = get_field('moving_pages', 'option');
		if ($set['thailand']):
			echo '<a href="'.$set['thailand']['url'].'">'.$set['thailand']['title'].'</a>';
		else:
			echo $def;
		endif;
		die();
	}

	add_action( 'wp_ajax_nopriv_ip_menu_in', 'ip_menu_in' );
	add_action( 'wp_ajax_ip_menu_in', 'ip_menu_in' );
	function ip_menu_in() {
		$def = '<a href="https://www.santaferelo.com/en/moving/locally/">Domestic Moving</a>';
		$set = get_field('moving_pages', 'option');
		if ($set['india']):
			echo '<a href="'.$set['india']['url'].'">'.$set['india']['title'].'</a>';
		else:
			echo $def;
		endif;
		die();
	}

	add_action( 'wp_ajax_nopriv_ip_menu_sg', 'ip_menu_sg' );
	add_action( 'wp_ajax_ip_menu_sg', 'ip_menu_sg' );
	function ip_menu_sg() {
		$def = '<a href="https://www.santaferelo.com/en/moving/locally/">Domestic Moving</a>';
		$set = get_field('moving_pages', 'option');
		if ($set['singapore']):
			echo '<a href="'.$set['singapore']['url'].'">'.$set['singapore']['title'].'</a>';
		else:
			echo $def;
		endif;
		die();
	}

	add_action( 'wp_ajax_nopriv_ip_menu_ae', 'ip_menu_ae' );
	add_action( 'wp_ajax_ip_menu_ae', 'ip_menu_ae' );
	function ip_menu_ae() {
		$def = '<a href="https://www.santaferelo.com/en/moving/locally/">Domestic Moving</a>';
		$set = get_field('moving_pages', 'option');
		if ($set['uae']):
			echo '<a href="'.$set['uae']['url'].'">'.$set['uae']['title'].'</a>';
		else:
			echo $def;
		endif;
		die();
	}

	add_action( 'wp_ajax_nopriv_ip_menu_uk', 'ip_menu_uk' );
	add_action( 'wp_ajax_ip_menu_uk', 'ip_menu_uk' );
	function ip_menu_uk() {
		$def = '<a href="https://www.santaferelo.com/en/moving/locally/">Domestic Moving</a>';
		$set = get_field('moving_pages', 'option');
		if ($set['uk']):
			echo '<a href="'.$set['uk']['url'].'">'.$set['uk']['title'].'</a>';
		else:
			echo $def;
		endif;
		die();
	}

	add_action( 'wp_ajax_nopriv_ip_menu_us', 'ip_menu_us' );
	add_action( 'wp_ajax_ip_menu_us', 'ip_menu_us' );
	function ip_menu_us() {
		$def = '<a href="https://www.santaferelo.com/en/moving/locally/">Domestic Moving</a>';
		$set = get_field('moving_pages', 'option');
		if ($set['usa']):
			echo '<a href="'.$set['usa']['url'].'">'.$set['usa']['title'].'</a>';
		else:
			echo $def;
		endif;
		die();
	}

	add_action( 'wp_ajax_nopriv_ip_contact', 'ip_contact' );
	add_action( 'wp_ajax_ip_contact', 'ip_contact' );
	function ip_contact() {
		$link = $_REQUEST['ip_lang'];
		$id = $_REQUEST['ajax_id'];
		// $record = geoip_detect2_get_info_from_ip( geoip_detect2_get_client_ip(), NULL );
		$country = get_country();
		$codes = array('HK', 'IN', 'SG', 'AE', 'GB', 'US', 'TH');
		if( in_array( $country, $codes ) ):
			$block = get_field( 'module_2_'.strtolower($country), $id);
			if( $block['use_default'] == true ):
				$block = get_field( 'module_2', $id);
			else:
				$block = $block['updated_group'];
			endif;
		else:
			$block = get_field( 'module_2', $id);
		endif;
	    echo '<div class="container">';
			echo ( $block['title'] ? "<h2>".$block['title']."</h2>" : "" );
			echo '<div class="" uk-grid>';
				if( $block['header'] || $block['item'] || $block['button'] ):
					echo '<div class="uk-width-expand">';
						echo '<div class="bordered">';
    						echo ( $block['header'] ? "<h3>".$block['header']."</h3>" : "" );
    						if($block['item']):
    							echo '<ul>';
        							foreach ($block['item'] as $item):
        								echo '<li>'.$item['list_item'].'</li>';
        							endforeach;
        						echo '</ul>';
        						echo ( $block['button'] ? "<a href='".( $block['button']['url'] )."' target='".$block['button']['target']."' class='button primary'>".$block['button']['title']."</a>" : "" );
    						endif;
    					echo '</div>';
					echo '</div>';
				endif;
				if( $block['header_2'] || $block['content'] ):
					echo '<div class="uk-width-expand">';
						echo '<div class="bordered">';
    						echo ( $block['header_2'] ? "<h3>".$block['header_2']."</h3>" : "" );
    						if( $block['content'] ):
    							echo '<div class="content">';
    								echo $block['content'];
    							echo '</div>';
    						endif;
    					echo '</div>';
					echo '</div>';
				endif;
				if( $block['image'] ):
					echo '<div class="uk-width-expand image-front">';
						if( is_null( $block['image']['url'] )):
							$newimage = wp_get_attachment_image_src( $block['image'],'full' );
							$url = $newimage[0];
							$height = $newimage[2];
							$width = $newimage[1];
						else:
							$url = $block['image']['url'];
							$height = $block['image']['height'];
							$width = $block['image']['width'];
						endif;
						// pre( $newimage[0] );
						echo '<img src="'.$url.'" height="'.$height.'" width="'.$width.'" alt="'.$block['image']['filename'].'">';
					echo '</div>';
				endif;
				if( $block['header_2'] || $block['content'] ):
					echo '<div class="uk-width-expand uk-grid-item-match">';
						echo '<div class="bordered"  data-src="'.$block['image']['url'].'" uk-img>';
    						echo ( $block['header_2'] ? "<h3>".$block['header_2']."</h3>" : "" );
    						if( $block['content'] ):
    							echo '<div class="content">';
    								echo $block['content'];
    							echo '</div>';
    						endif;
    					echo '</div>';
					echo '</div>';
				endif;
			echo '</div>';
		echo '</div>';
		die();
	}

	add_action( 'wp_ajax_nopriv_ip_module_function', 'ip_module_function' );
	add_action( 'wp_ajax_ip_module_function', 'ip_module_function' );
	function ip_module_function() {
		$link = $_REQUEST['ip_lang'];
		$id = $_REQUEST['ajax_id'];
		if ( have_rows('content_blocks', $id ) ):
			while ( have_rows('content_blocks' , $id) ) : the_row();
				if( get_row_layout() == 'ip_module' ):
				    $lang = $_REQUEST['ip_lang'];
				    $expiry =  '30000000';
				    if (get_sub_field('expiry_date')):
				    	$expiry = get_sub_field('expiry_date');
				    endif;
				    if( ( in_array( $lang , get_sub_field('country_show_new')) ) &&  ( $expiry > date('Ymd') ) ):
						echo '<div class="ip-module">';
							echo '<div class="container">';
								echo '<div class="uk-grid-match uk-child-width-1-'.( get_sub_field('module_layout', $id) == 'two' ? '2' : '1').'" uk-grid>';
								 foreach( get_sub_field('module_select') as $new ):
									echo '<div '.( (get_field('module_type', $new) == 'banner') ? 'class="banner-container"' : '' ).'>';
					    				if( get_field('module_type', $new) == 'banner'):
					    					$item = get_field('banner', $new);
					        				echo '<div class="module-banner uk-height-medium" data-src="'.$item['img']['url'].'" uk-img>';
					        					echo '<div class="gradient">';
						        					echo '<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover">';
						        						echo '<div>';
								        					echo '<p>'.$item['banner_type'].'</p>';
								        					echo '<h3>'.$item['banner_title'].'</h3>';
								        					if($item['banner_link']):
								        						echo '<a class="button primary" href="'.$item['banner_link']['url'].'">'.$item['banner_link']['title'].'</a>';
								        					endif;
								        				echo '</div>';
							        				echo '</div>';
							        			echo '</div>';
						        			echo '</div>';
					        			endif;
					        			if( get_field('module_type', $new) == 'content'):
					        				$item = get_field('content', $new);
					        				echo '<div class="gray uk-height-medium">';
						        				echo '<div class="module-content">';
						        					if( $item['title'] ):
						        						echo '<h3>'.$item['title'].'</h3>';
						        					endif;
						        					if( $item['description'] ):
						        						echo '<p>'.$item['description'].'</p>';
						        					endif;
						        					if($item['checklist']):
						        						echo '<ul>';
						        							foreach( $item['checklist'] as $line ):
						        								echo '<li>'.$line['item'].'</li>';
						        							endforeach;
						        						echo '</ul>';
						        					endif;
						        					if( $item['link'] ):
						        						echo '<p><a href="'.$item['link']['url'].'"><span>'.$item['link']['title'].'</span></a></p>';
						        					endif;
						        				echo '</div>';
						        			echo '</div>';
					        			endif;
					        			if( get_field('module_type', $new) == 'contact'):
					        				$item = get_field('contact', $new);
					        				echo '<div class="uk-height-medium black">';
						        				echo '<div class="module-contact">';
						        					echo '<h3>Get in touch</h3>';
						        					echo '<div>';
						        						echo 'Address';
						        						echo '<p>'.$item['address'].'</p>';
						        					echo '</div>';
						        					echo '<div>';
						        						echo 'Speak to a move consultant';
						        						echo '<p>'.$item['phone'].'</p>';
						        					echo '</div>';
						        					echo '<div>';
						        						echo "Email";
						        						echo '<p>'.$item['email'].'</p>';
						        					echo '</div>';
						        					
						        				echo '</div>';
						        			echo '</div>';
					        			endif;
					        		echo '</div>';
								endforeach;
							echo '</div>';
						echo '</div>';
					endif;
				endif;
			endwhile;
		endif;
		die();
	}

	add_action( 'wp_ajax_nopriv_destination_function', 'destination_function' );
	add_action( 'wp_ajax_destination_function', 'destination_function' );
	function destination_function() {
	    $link = $_REQUEST['link'];
	    echo '<div>';
	    	// pre( url_to_postid( $link ) ) ;
	    	$args = array(
				'post_parent' => url_to_postid( $link ),
				'post_type'   => 'destination-guides',
				'numberposts' => -1,
				'post_status' => 'publish' 
			);
			$cities = get_children( $args );

	    	if ( $cities ):
	    		echo '<div class="select-container">';
		    		echo '<select id="ajax-select"><option value="#">Select a City</option>';
			    		foreach ( $cities as $city ):
			    			echo '<option value="' . get_permalink( $city->ID  ). '">';
			    				echo get_the_title(  $city->ID  );
			    			echo '</option>';
			    		endforeach;
			    	echo '</select>';
			    echo '</div>';
			    echo '<div class="button-container">';
			    	echo '<div class="foobarsubmit"><div class="button">See guide</div></div>';
			    echo '</div>';
	    	endif;
	    echo '</div>';
	    die();
	}


	add_action( 'wp_ajax_nopriv_destination_function2', 'destination_function2' );
	add_action( 'wp_ajax_destination_function2', 'destination_function2' );
	function destination_function2() {
	    $link = $_REQUEST['link'];
	    echo '<div>';
	    	//pre( url_to_postid( $link ) ) ;
	    	$args = array(
				'post_parent' => url_to_postid( $link ),
				'post_type'   => 'destination-guides',
				'numberposts' => -1,
				'post_status' => 'publish' 
			);
			$cities = get_children( $args );

	    	if ( $cities ):
	    		echo '<div class="select-container">';
		    		echo '<select id="ajax-select-street"><option value="#">Select a Borough</option>';
			    		foreach ( $cities as $city ):
			    			echo '<option value="' . get_permalink( $city->ID  ). '">';
			    				echo get_the_title(  $city->ID  );
			    			echo '</option>';
			    		endforeach;
			    	echo '</select>';
			    echo '</div>';
			    echo '<div class="button-container">';
			    	echo '<div class="foobarsubmit"><div class="button">See guide</div></div>';
			    echo '</div>';
	    	endif;
	    echo '</div>';
	    die();
	}

	add_action( 'wp_ajax_nopriv_country_function', 'country_function' );
	add_action( 'wp_ajax_country_function', 'country_function' );
	function country_function() {
	    $link = $_REQUEST['link'];
	    echo '<div>';
	    	//pre( url_to_postid( $link ) ) ;
	    	$cities = get_field( 'cities', url_to_postid( $link ) );
	    	if ( $cities ):
	    		echo '<div class="select-container">';
		    		echo '<select id="ajax-select"><option value="#">Select a City</option>';
			    		foreach ( $cities as $city ):
			    			echo '<option value="' . get_permalink( url_to_postid( $city['link'] ) ). '">';
			    				echo get_the_title( url_to_postid( $city['link'] ) );
			    			echo '</option>';
			    		endforeach;
			    	echo '</select>';
			    echo '</div>';
			    echo '<div class="button-container">';
			    	echo '<div class="foobarsubmit"><div class="primary button">See guide</div></div>';
			    echo '</div>';
	    	endif;
	    echo '</div>';
	    die();
	}

	add_action( 'wp_ajax_nopriv_office_function', 'office_function' );
	add_action( 'wp_ajax_office_function', 'office_function' );
	function office_function() {
	    $link = $_REQUEST['link'];
	    $args = array(
			'post_type' => 'offices',
			'posts_per_page'=> -1,
			'orderby' => 'title',
			'order' => 'ASC',
			'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'country',
					'field'    => 'slug',
					'terms'    => $link,
				),
			),
		);

	    $query = new WP_Query( $args );

	    if ( $query->have_posts() ):
	    	echo '<option value="disabled">Please select town/city</option>';
	    	while ( $query->have_posts() ):
	    		$query->the_post();
	    		echo '<option value="'.get_permalink( $query->post->ID ).'">';
		  			echo $query->post->post_title;
				echo '</option>';
	    	endwhile;
	    endif;
	    die();
	}

	add_action( 'wp_ajax_nopriv_xcategory_function', 'xcategory_function' );
	add_action( 'wp_ajax_xcategory_function', 'xcategory_function' );
	function xcategory_function() {
	    $cat = $_POST['cat'];
	    $tax = $_POST['tax'];
		$cpt = $_POST['cpt'];
		$taxonomy = get_object_taxonomies( $cpt );
		$terms = get_terms( array(
		    'taxonomy' => $taxonomy[0],
		    'hide_empty' => false,
		) );
	    $feat = get_field('featured_blog_post', 'option');
		$args = array(
			'post_type' 		=> $cpt,
			'posts_per_page' 	=> 20,
			'tax_query' => array(
				array(
					'taxonomy'		=> $tax,
					'terms'    		=> $cat
				)
			)
		);
		if ( $cat == "all"):
			$args = array(
				'post_type' 		=> $cpt,
				'posts_per_page' 	=> 20,
			);
		endif;
		$query = new WP_Query( $args );
		$feat = get_field('featured_blog_post', 'option');
		if ( $query->have_posts() ):
			echo '<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
			// foreach( $feat as $item ):
			// 	if( get_post_type( $item ) == $cpt ):
			// 		echo '<div class="uk-card">';
			// 			echo '<a href="'.get_permalink(  $item ).'">';
			// 				echo '<div class="cards-bg">';
			// 					echo '<div class="uk-card-media-top">';
			// 						$img = get_the_post_thumbnail_url( $item,'full' );
			// 						echo '<div class="uk-background-cover" style="background-image: url('.$img.');">';
			// 							if( get_post_type( $item ) == $cpt ):
			// 								echo '<span>Featured</span>';
			// 							endif;
			// 						echo '</div>';
			// 					echo '</div>';
			// 					echo '<div class="uk-card-body">';
			// 						echo '<p class="uk-text-bold">'.get_the_title( $item ).'</p>';
			// 						echo '<p class="date uk-position-bottom-left">Posted '.get_post_time( 'd/m/Y', false, $item, false ).'</p>';
			// 					echo '</div>';
			// 				echo '</div>';
			// 			echo '</a>';
			// 		echo '</div>';
			// 	endif;
			// endforeach;
			// $count = 0;
			while ( $query->have_posts() ):
				$query->the_post();
				// foreach( $feat as $item ):
				// 	if( get_post_type( $item ) == $cpt ):
				// 		if ( $query->post->ID ==  $item):
				// 		else:
							echo '<div class="uk-card uk-flex uk-flex-column">';
								echo '<a href="'.get_permalink(  $query->post->ID ).'">';
									echo '<div class="cards-bg">';
										echo '<div class="uk-card-media-top">';
											$img = get_the_post_thumbnail_url(get_the_ID(),'full');
											echo '<div class="uk-background-cover" style="background-image: url('.$img.');">';
											// if ($count == 0):
											// 	echo '<span class="new">New</span>';
											// endif;
											echo '</div>';
										echo '</div>';
										echo '<div class="uk-card-body">';
											echo '<p class="uk-text-bold">'.get_the_title( $query->post->ID ).'</p>';
											echo '<p class="date uk-position-bottom-left">Posted '.get_post_time( 'd/m/Y' ).'</p>';
										echo '</div>';
									echo '</div>';
								echo '</a>';
							echo '</div>';
				// 		endif;
				// 	endif;
				// endforeach;
				// $count++;
			endwhile;
			echo '</div>';
			wp_reset_postdata();
		endif;
	   	die();
	}

	add_action( 'wp_ajax_nopriv_site_nav', 'site_nav' );
	add_action( 'wp_ajax_site_nav', 'site_nav' );
	function site_nav() {
	    $nav = $_REQUEST['site_nav'];
	    if( $nav == 'corporate' ):

			$menuArgss = array(
			    'theme_location' => 'corpnew-primary',
			    'container' => false,
			    'menu_class' => 'uk-navbar-nav',
			    'depth' => 3
			);

		else:
			$menuArgss = array(
			    'theme_location' => 'new-primary',
			    'container' => false,
			    'menu_class' => 'uk-navbar-nav',
			    'depth' => 3
			);
		endif;
		if( is_page('contact-us-sanoasdhasd' ) ):
    		$menuArgss = array(
	            'theme_location' => 'corporate2021',
	            'container' => false,
	            'menu_class' => 'uk-navbar-nav',
	            'depth' => 3
	        );
	    endif;
		wp_nav_menu( $menuArgss );
	    die();
	}