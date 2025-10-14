<?php get_header('corporate');
die('maintenance');
	echo '<section class="main-layout inner-page-layout '.get_post_type().'">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				echo '<div class="uk-child-width-1-2@m uk-grid-collapse map-banner" uk-grid>';
					$location = get_field('map');
					$data = get_field('pd_products_services', 'options');
					$data =  $data['products_services'] ;
					if( $location ):
						echo '<div>';
							echo '<div id="map" data-lat="'.$location['lat'].'" data-lng="'.$location['lng'].'"></div>';
						echo '</div>';
					endif;
					if ( ( get_field( 'address' ) || get_field('general_enquires') || get_field('sales') || get_field('fax_1') || get_field( 'email' ) ) ):
						echo '<div class="outer">';
							echo '<div class="half-container">';
								echo '<h1>Santa Fe Relocation in '.get_the_title().'</h1>';
								echo '<div class="details">';
								if(get_the_ID()!=1298){
									if ( get_field( 'address' ) ):
										echo '<div>';
											echo '<span>Address</span>';
											echo '<p>'.get_field( 'address' ).'</p>';
										echo '</div>';
									endif;
								}
									if ( ( get_field('general_enquires') || get_field('sales') || get_field('fax_1') ) ):
										echo '<div>';
											echo '<div class="uk-child-width-1-3" uk-grid>';
												if ( get_field('general_enquires') ):
													echo '<div class="'.get_field('country').'">';
														echo '<span>Corporate enquiries</span>';
														echo '<p>'.get_field( 'general_enquires' ).'</p>';
													echo '</div>';
												endif;
												if ( get_field('sales') && (get_field('sales') != get_field('general_enquires') ) ):
													echo '<div class="'.get_field('country').'">';
												
													if(in_array(get_field('country'),['FR','ES','US','HK','SG','GB','DE'])):
														echo '<span>Personal enquiries</span>';
													else: 
														echo '<span>Sales</span>';
													endif;
														echo '<p>'.get_field( 'sales' ).'</p>';
													echo '</div>';
												endif;
												if ( get_field('fax_1') && (get_field('fax_1') != get_field('general_enquires') ) ):
													echo '<div>';
														echo '<span>Fax</span>';
														echo '<p>'.get_field( 'fax_1' ).'</p>';
													echo '</div>';
												endif;
											echo '</div>';
										echo '</div>';
									endif;
									if ( get_field( 'email' ) ):
										echo '<div>';
											echo '<span>Email</span>';
											echo '<p> <a style="color:#FFF" mailto:'.get_field( 'email' )."'>".get_field( 'email' ).'</a></p>';
										echo '</div>';
									endif;
								echo '</div>';
							echo '</div>';
						echo '</div>';
					endif;
				echo '</div>';
				if (empty_content($post->post_content)) :
				else:
					echo '<div class="container">';
						the_content();
					echo '</div>';
				endif;
				if ( have_rows('content_editor') ):
					echo '<div class="container author-content">';
						while ( have_rows('content_editor') ) : the_row();
							if( get_row_layout() == 'header_layout' ):
								if ( get_sub_field('header') ):
									echo '<'.get_sub_field('header_style').'>'.get_sub_field('header').'</'.get_sub_field('header_style').'>';
								endif;
							elseif( get_row_layout() == 'paragraph_layout' ): 
								if ( get_sub_field('paragraph') ):
									echo '<p>'.get_sub_field('paragraph').'</p>';
								endif;
							elseif( get_row_layout() == 'list_layout' ): 
								if ( get_sub_field('list') ):
									echo '<ul>';
										foreach ( get_sub_field('list') as $item ):
											echo '<li>'.$item['item'].'</li>';
										endforeach;
									echo '</ul>';
								endif;
							endif;
						endwhile;
					echo '</div>';
				endif;

				if( have_rows('london_office') ):
					echo'<div id="london_office">';
							echo '<div class="container">'; 
								echo '<h3>Removals and storage in your area</h3>';	
									echo '<ul>';
										echo '<li class="uk-child-width-1-2@s uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
											while ( have_rows('london_office') ) : the_row();

												echo '<div>';
													$subfield = get_sub_field('url');
												 if( empty($subfield) ){
											       echo '<p>' . get_sub_field('destination') . '</p>';
											      }
											      else{
											      	echo '<a href="'.get_sub_field('url').'">';
														echo '<p>' . get_sub_field('destination') . '<i class="material-icons">chevron_right</i></p>';
													echo '</a>';
											      }
												
												echo '</div>';
											endwhile;
										echo'</li>';
									echo'</div>';
							echo'</ul>';	
					echo '</div>';
 				endif;
 					echo '<div class="container">'; 
 						the_field('content_editor2');
 					echo '</div>';
 			



				if ( ( get_field('link_title2') || get_field('button_link2') ) ):
					echo '<div class="multi-link-block-custom">';
		        		echo '<div class="container">';
		        			echo '<div class="bordered">';
		        				$block = get_field('button_link2');
		        				echo ( get_field('link_title2') ? "<h3>".get_field('link_title2')."</h3>" : "" );
		        				echo ( $block ? "<a href='https://www.santaferelo.com/en/contact-us/' class='button primary'>Contact us</a>" : "" );
		        			echo '</div>';
			        	echo '</div>';
		        	echo '</div>';
				endif;

				$cta = get_field('call_to_action');
				// if ( (get_field('header') || get_field('left-content') || get_field('file_moving') || get_field('whats_included') || get_field('add-ons') || $cta[0]['text'] || $cta[0]['link']['url'] || $cta[0]['link']['title']  ) ):
				// 	echo '<div class="office-module">';
				// 		echo '<div class="uk-child-width-expand" uk-grid>';
				// 			if (get_field('header') || get_field('left-content') || get_field('file_moving') ):
				// 				echo '<div class="gray">';
				// 					echo '<div class="half-container">';
				// 						echo '<div class="left-content">';
				// 							if ( get_field('header') ):
				// 								echo '<h3>'.get_field('header').'</h3>';
				// 							endif;
				// 							if ( get_field('left-content') ):
				// 								echo get_field('left-content');
				// 							endif;
				// 							if ( get_field('file_moving') ):
				// 								$file = get_field('file_moving');
				// 								echo '<div class="dload">';
				// 									echo '<i class="image-container sf-icons b"></i> <a href="'.$file['url'].'">Download a free moving checklist</a>';
				// 								echo '</div>';
				// 							endif;
				// 						echo '</div>';
				// 					echo '</div>';
				// 				echo '</div>';
				// 			endif;
				// 			if ( get_field('whats_included') || get_field('add-ons') || $cta[0]['text'] || $cta[0]['link']['url'] || $cta[0]['link']['title']  ):
				// 				echo '<div class="black">';
				// 					echo '<div class="half-container">';
				// 						if ( get_field('whats_included') || get_field('add-ons') ):
				// 							echo '<div class="uk-child-width-1-2" uk-grid>';
				// 								if ( get_field('whats_included') ):
				// 									echo '<div>';
				// 										echo '<h3>What’s included</h3>';
				// 										echo '<ul class="check">';
				// 											foreach ( get_field( 'whats_included' ) as $item ):
				// 												echo '<li>'.$item['item'].'</li>';
				// 											endforeach;
				// 										echo '</ul>';
				// 									echo '</div>';
				// 								endif;
				// 								if ( get_field('add-ons') ):
				// 									echo '<div>';
				// 										echo '<h3>Add ons</h3>';
				// 										echo '<ul class="plus">';
				// 											foreach ( get_field( 'add-ons' ) as $item ):
				// 												echo '<li>'.( $item['link'] ? '<a href="'. $item['link']['url'].'">' : '' );
				// 													echo  $item['item'];
				// 												echo ( $item['link'] ? '</a><span uk-icon="icon: chevron-right; ratio: 1"></span>' : '' ) .'</li>';
				// 											endforeach;
				// 										echo '</ul>';
				// 									echo '</div>';
				// 								endif;
				// 							echo '</div>';
				// 						endif;
				// 						// if ( have_rows('call_to_action') ):
				// 						// 	if (  $cta[0]['text'] || $cta[0]['link'] ):
				// 						// 		echo '<div class="cta">';
				// 						// 			echo  $cta[0]['text'];
				// 						// 			echo '<a href="'.$cta[0]['link']['url'].'">'.$cta[0]['link']['title'].'</a>';
				// 						// 		echo '</div>';
				// 						// 	endif;
				// 						// endif;
				// 					echo '</div>';
				// 				echo '</div>';
				// 			endif;
				// 		echo '</div>';
				// 	echo '</div>';
				// endif;
				// if (  get_field( 'enable_custom') == 'yes' ):
				// 	echo '<div class="product-services">';
				// 		echo '<div class="container">';
				// 			echo '<h3>Our services</h3>';
				// 			echo '<p>Whatever you’re moving, our extensive services range are designed to make each step of your move stress-free. If you would like to learn more then get in touch with us today for a free quote.</p>';
				// 		echo '</div>';
				// 		$ps = get_field( 'products_services_c' );
				// 		if ( $ps['our_products'] || $ps['our_services'] ):
				// 			echo '<div class="product-services-tab">';
				// 				echo '<div class="tab-component">';
				// 					echo '<div class="container">';
				// 						echo '<ul uk-switcher="connect: #my-id" uk-tab>';
				// 							// if ( $ps['our_products'] ):
				// 							// 	echo '<li><a href="#">Our products</a></li>';
				// 							// endif;
				// 							if ( $ps['our_services'] ):
				// 								echo '<li><a href="#">Our services</a></li>';
				// 							endif;
				// 						echo '</ul>';
				// 					echo '</div>';
				// 				echo '</div>';
				// 				echo '<div class="container uk-margin">';
				// 					echo '<ul id="my-id" class="uk-switcher">';
				// 						// if ( $ps['our_products'] ):
				// 						// 	echo '<li>';
				// 						// 		echo '<div class="uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
				// 						// 			foreach ( $ps['our_products'] as $item ):
				// 						// 				echo '<div class="uk-card">';
				// 						// 					if ( $item['link'] ):
				// 						// 						echo '<a href="'.$item['link'].'" class="uk-transition-toggle">';
				// 						// 					endif;
				// 						// 						echo '<div class="cards-bg">';
				// 						// 							if( $item['image'] ):
				// 						// 								$img = $item['image'];
				// 						// 								echo '<div class="uk-card-media-top">';
				// 						// 									echo '<div class="uk-background-cover" style="background-image: url('.$img.');">';
				// 						// 									echo '</div>';
				// 						// 								echo '</div>';
				// 						// 							endif;
				// 						// 							echo '<div class="uk-card-body">';
				// 						// 								if( $item['title'] ):
				// 						// 									echo '<p class="uk-text-bold">'.$item['title'].'</p>';
				// 						// 								endif;
				// 						// 								if( $item['description'] ):
				// 						// 									echo '<p>'.$item['description'].'</p>';
				// 						// 								endif;
				// 						// 							echo '</div>';
				// 						// 						echo '</div>';
				// 						// 						echo '<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">';
                // 						// 							echo '<p class="uk-margin-remove">Read More</p>';
			    //         				// 						echo '</div>';
			    //         				// 					if ( $item['link'] ):
				// 						// 						echo '</a>';
				// 						// 					endif;
				// 						// 				echo '</div>';
				// 						// 			endforeach;
				// 						// 		echo '</div>';
				// 						// 	echo '</li>';
				// 						// endif;
				// 						if ( $ps['our_services'] ):
				// 							echo '<li>';
				// 								echo '<div class="uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
				// 									foreach ( $ps['our_services'] as $item ):
				// 										echo '<div class="uk-card">';
				// 											if ( $item['link'] ):
				// 												echo '<a href="'.$item['link'].'" class="uk-transition-toggle">';
				// 											endif;
				// 												echo '<div class="cards-bg">';
				// 													if( $item['image'] ):
				// 														$img = $item['image'];
				// 														echo '<div class="uk-card-media-top">';
				// 															echo '<div class="uk-background-cover" style="background-image: url('.$img.');">';
				// 															echo '</div>';
				// 														echo '</div>';
				// 													endif;
				// 													echo '<div class="uk-card-body">';
				// 														if( $item['title'] ):
				// 															echo '<p class="uk-text-bold">'.$item['title'].'</p>';
				// 														endif;
				// 														if( $item['description'] ):
				// 															echo '<p>'.$item['description'].'</p>';
				// 														endif;
				// 													echo '</div>';
				// 												echo '</div>';
				// 												echo '<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">';
                // 													echo '<p class="uk-margin-remove">Read More</p>';
			    //         										echo '</div>';
			    //         									if ( $item['link'] ):
				// 												echo '</a>';
				// 											endif;
				// 										echo '</div>';
				// 									endforeach;
				// 								echo '</div>';
				// 							echo '</li>';
				// 						endif;
				// 					echo '</ul>';
				// 				echo '</div>';
				// 			endif;
				// 		echo '</div>';
				// 		//pre( $ps );
				// 	echo '</div>';
				// else:
				// 	if( get_field('products_services') ):
				// 		$ps = get_field('products_services');
				// 		echo '<div class="product-services">';
				// 			if ( $ps['title'] || $ps['description'] ):
				// 				echo '<div class="container">';
				// 					if ( $ps['title'] ):
				// 						echo '<h3>'.$ps['title'].'</h3>';
				// 					endif;
				// 					if ( $ps['description'] ):
				// 						echo '<p>'.$ps['description'].'</p>';
				// 					endif;
				// 				echo '</div>';
				// 			endif;
				// 			if ( $ps['our_products'] || $ps['our_services'] ):
				// 				echo '<div class="product-services-tab">';
				// 					echo '<div class="tab-component">';
				// 						echo '<div class="container">';
				// 							echo '<ul uk-switcher="connect: #my-id" uk-tab>';
				// 							// 	if ( $ps['our_products'] ):
				// 							// 		echo '<li><a href="#">Our products</a></li>';
				// 							// 	endif;
				// 								if ( $ps['our_services'] ):
				// 									echo '<li><a href="#">Our services</a></li>';
				// 								endif;
				// 							echo '</ul>';
				// 						echo '</div>';
				// 					echo '</div>';
				// 					echo '<div class="container uk-margin">';
				// 						echo '<ul id="my-id" class="uk-switcher">';
				// 							// if ( $ps['our_products'] ):
				// 							// 	echo '<li>';
				// 							// 		echo '<div class="uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
				// 							// 			foreach ( $ps['our_products'] as $item ):
				// 							// 				echo '<div class="uk-card">';
				// 							// 					echo '<a href="'.get_permalink( $item->ID ).'" class="uk-transition-toggle">';
				// 							// 						echo '<div class="cards-bg">';
				// 							// 							echo '<div class="uk-card-media-top">';
				// 							// 								$img = get_field('banner', $item->ID);
				// 							// 								echo '<div class="uk-background-cover" style="background-image: url('.$img['banner_image']['url'].');">';
				// 							// 								echo '</div>';
				// 							// 							echo '</div>';
				// 							// 							echo '<div class="uk-card-body">';
				// 							// 								echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
				// 							// 								$excerpt = '';
				// 							// 								if ( get_the_excerpt($item->ID) ):
				// 							// 									$excerpt = get_the_excerpt($item->ID);
				// 							// 								else:
				// 							// 									$excerpt = $img['banner_description'];
				// 							// 								endif;
				// 							// 								echo '<p>'.$excerpt.'</p>';
				// 							// 							echo '</div>';
				// 							// 						echo '</div>';
				// 							// 						echo '<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">';
	            //     						// 							echo '<p class="uk-margin-remove">Read More</p>';
				//             				// 						echo '</div>';
				// 							// 					echo '</a>';
				// 							// 				echo '</div>';
				// 							// 			endforeach;
				// 							// 		echo '</div>';
				// 							// 	echo '</li>';
				// 							// endif;
				// 							if ( $ps['our_services'] ):
				// 								echo '<li>';
				// 									echo '<div class="uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
				// 										foreach ( $ps['our_services'] as $item ):
				// 											echo '<div class="uk-card">';
				// 												echo '<a href="'.get_permalink( $item->ID ).'" class="uk-transition-toggle">';
				// 													echo '<div class="cards-bg">';
				// 														echo '<div class="uk-card-media-top">';
				// 															$img = get_field('banner', $item->ID);
				// 															echo '<div class="uk-background-cover" style="background-image: url('.$img['banner_image']['url'].');">';
				// 															echo '</div>';
				// 														echo '</div>';
				// 														echo '<div class="uk-card-body">';
				// 															echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
				// 															$excerpt = '';
				// 															if ( get_the_excerpt($item->ID) ):
				// 																$excerpt = get_the_excerpt($item->ID);
				// 															else:
				// 																$excerpt = $img['banner_description'];
				// 															endif;
				// 															echo '<p>'.$excerpt.'</p>';
				// 														echo '</div>';
				// 													echo '</div>';
				// 													echo '<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">';
	            //     													echo '<p class="uk-margin-remove">Read More</p>';
				//             										echo '</div>';
				// 												echo '</a>';
				// 											echo '</div>';
				// 										endforeach;
				// 									echo '</div>';
				// 								echo '</li>';
				// 							endif;
				// 						echo '</ul>';
				// 					echo '</div>';
				// 				endif;
				// 			echo '</div>';
				// 			//pre( $ps );
				// 		echo '</div>';
				// 	endif;
				// endif;
				// if( have_rows('content_blocks') ):
				// 	echo '<div class="content-block">';
				// 	    while ( have_rows('content_blocks') ) : the_row();
				// 	        if( get_row_layout() == 'front_page_header-subheader-repeater' ):
				// 	        	echo '<div class="header-subheader-repeater">';
				// 	        		echo '<div class="container">';
				//         				if ( get_sub_field( 'custom' ) ):
				// 	        				$clone = get_sub_field('clone');
				// 	        				$block = $clone['front_page-numbers'];
				// 	        			else:
				// 	        				$block = get_field( 'front_page-numbers', 'option' );
				// 	        			endif;
				//         				echo ( $block['section_title'] ? "<h2>".$block['section_title']."</h2>" : "" );
				//         				echo ( $block['section_description'] ? "<p>".$block['section_description']."</p>" : "" );
				//         				if ( $block['items'] ):
				//         					echo '<div uk-grid>';
				// 		        				foreach ( $block['items'] as $item ):
				// 		        					echo '<div class="uk-width-expand">';
				// 		        						echo ( $item['header'] ? "<div class='number odometer' ".( $item['header_color'] ? "style=color:".$item['header_color'] : "" )." data-target=".$item['header'].">".floor( $item['header']*0.85 )."</div>" : "" );
				// 		        						echo ( $item['sub_header'] ? "<div class='sub-header'>".$item['sub_header']."</div>" : "" );
				// 		        					echo '</div>';
				// 		        				endforeach;
				// 		        			echo '</div>';
				// 	        			endif;
				// 	        		echo '</div>';
				// 	        	echo '</div>';
				// 	        elseif( get_row_layout() == 'multi-link-block-custom' ): 
				// 	        	echo '<div class="multi-link-block-custom">';
				// 	        		echo '<div class="container">';
				// 	        			echo '<div class="bordered">';
				// 			        		if ( get_sub_field( 'custom' ) ):
				// 		        				$clone = get_sub_field('clone');
				// 		        				$block = $clone['multi-link-block'];
				// 		        			else:
				// 		        				$block = get_field( 'multi-link-block', 'option' );
				// 		        			endif;
				// 	        				echo ( $block['link_title'] ? "<h3>".$block['link_title']."</h3>" : "" );
				// 	        				echo ( $block['button_link'] ? "<a href='".( $block['button_link']['url'] )."' target='".$block['button_link']['target']."' class='button primary'>".$block['button_link']['title']."</a>" : "" );
				// 	        			echo '</div>';
				// 		        	echo '</div>';
				// 	        	echo '</div>';
				// 	        elseif( get_row_layout() == 'footer_content_multicolor-banner' ):
				// 	        	if ( get_sub_field( 'custom' ) ):
			    //     				$clone = get_sub_field('clone');
			    //     				$block = $clone['multicolor-banner'];
			    //     			else:
			    //     				$block = get_field( 'multicolor-banner', 'option' );
			    //     			endif;
				// 	        	echo '<div class="multicolor-banner" style="background-image: linear-gradient(80deg, '.$block['background_color_-_left'].', '.$block['background_color_-_right'].');">';
				//         			// pre( $block );
				// 	        		echo '<div class="container">';
				// 	        			echo '<div class="banner-logo">';
				//         					echo '<img src="'.$block['banner_logo']['url'].'">';
				//         				echo '</div>';
				//         				echo '<div class="banner-description">';
				//         					echo $block['banner_description'];
				//         				echo '</div>';
			    //     				echo '</div>';
				// 	        	echo '</div>';
				// 	        elseif( get_row_layout() == 'get_in_touch' ): 
				// 	        	$block = get_field('get_touch_clone', 'option');
				// 	        	if ( get_sub_field( 'custom' ) ):
			    //     				$clone = get_sub_field('clone');
			    //     				$block = $clone['get_touch_clone'];
			    //     			else:
			    //     				$block = get_field( 'get_touch_clone', 'option' );
			    //     			endif;
				// 	        	echo '<div class="icon-item" '.( $block['background_color'] ? 'style="background-color:'.$block['background_color'].'"' : '' ).'>';
				// 	        		echo '<div class="container">';
				// 	        			echo ( $block['section_title'] ? "<h3>".$block['section_title']."</h3>" : "" );
				//         				echo ( $block['section_description'] ? "<p>".$block['section_description']."</p>" : "" );
				// 	        			if ( $block['icon_item'] ):
				// 	        				echo '<div uk-grid>';
				// 			        			foreach ( $block['icon_item'] as $item ):
				// 			        				echo '<div class="uk-width-expand">';
				// 			        					if ( $item['border_color'] ):
				// 			        					echo '<div class="bordered" style="border-color:'.$item['border_color'].';">';
				// 			        					endif;
				// 				        					echo ( $item['icons'] ? '<div class="uk-inline icon-container"><div class="uk-position-center"><i class="'.$item['icons'].'"></i></div></div>' : '' );
				// 				        					echo ( $item['title'] ? '<p class="title">'.$item['title'].'</p>' : '' );
				// 				        					echo ( $item['description'] ? '<p class="description">'.$item['description'].'</p>' : '' );
				// 				        					echo ( $item['link'] ? '<a href="'.$item['link']['url'].' target="'.( $item['link']['target'] ? "_blank" : "_self").' class="icon-link">'.$item['link']['title'].'</a>' : '' );
				// 				        				if ( $item['border_color'] ):
				// 			        					echo '</div>';
				// 			        					endif;
				// 				        			echo '</div>';
				// 			        			endforeach;
				// 		        			echo '</div>';
				// 		        		endif;
				// 	        		echo '</div>';
				// 	        	echo '</div>';
				// 	        elseif( get_row_layout() == 'icons_section' && FALSE ): 
				// 	        	//echo '<div class="icon-item" '.( get_sub_field('background_color') ? 'style="background-color:'.get_sub_field('background_color').'"' : '' ).'>';
				// 	        	echo '<div class="icon-item" ';
				// 	        	//if ( get_sub_field('background_color') || get_sub_field('font_color') ):
				// 	        		echo 'style="';
				// 	        		if ( get_sub_field('background_color') ):
				// 	        			echo 'background-color:'.get_sub_field('background_color').';';
				// 	        		endif;
				// 	        		if ( get_sub_field('font_color') ):
				// 	        			echo 'color:'.get_sub_field('font_color').';';
				// 	        		else:
				// 	        			echo 'color:#353c41;';
				// 	        		endif;
				// 	        		echo '">';
				// 	        	//endif;
				// 	        		echo '<div class="container">';
				// 	        			echo ( get_sub_field('section_title') ? "<h3>".get_sub_field('section_title')."</h3>" : "" );
				//         				echo ( get_sub_field('section_description') ? "<p>".get_sub_field('section_description')."</p>" : "" );
				// 	        			if ( get_sub_field('icon_item') ):
				// 	        				echo '<div uk-grid uk-height-match="target: > div > .bordered p.description">';
				// 	        					$many = count( get_sub_field('icon_item') ) ;
				// 			        			foreach ( get_sub_field('icon_item') as $item ):
				// 			        				echo '<div class="'.( $many > 4 ? 'uk-width-1-4': 'uk-width-expand').'">';
				// 				        					if ( $item['color'] ):
				// 				        					echo '<div class="bordered" style="border-color:'.$item['color'].';">';
				// 				        					endif;
				// 						        					echo ( $item['icons'] ? '<div class="uk-inline icon-container"><div class="uk-position-center"><i class="'.$item['icons'].'"></i></div></div>' : '' );
				// 						        					echo ( $item['title'] ? '<p class="title">'.$item['title'].'</p>' : '' );
				// 						        					echo '<p class="description">'.$item['description'].'</p>';
				// 						        					echo ( $item['link'] ? '<a href="'.$item['link']['url'].' target="'.( $item['link']['target'] ? "_blank" : "_self").' class="icon-link">'.$item['link']['title'].'</a>' : '' );
				// 					        				if ( $item['color'] ):
				// 				        					echo '</div>';
				// 				        					endif;
				// 				        			echo '</div>';
				// 			        			endforeach;
				// 		        			echo '</div>';
				// 		        		endif;
				// 	        		echo '</div>';
				// 	        	echo '</div>';
				// 	        elseif( get_row_layout() == 'review' ):
				// 	         	$review = get_field('widget', 'option');
				// 	    	    echo '<div class="homepage2">';
				// 					echo '<div class="container">';
				// 						echo $review['widget_header'];
				// 						echo $review['widget_script'];
				// 					echo '</div>';
				// 				echo '</div>';
				// 		    elseif( get_row_layout() == 'two_column' ):
				// 		    	if ( get_sub_field('column') ):
				// 			    	echo '<div class="two-column">';
				// 			        	echo '<div class="container">';
				// 				        	echo '<div class="uk-grid-large" uk-grid>';
				// 				        		foreach ( get_sub_field('column') as $item ):
				// 				        			echo '<div class="uk-width-expand">';
				// 					        			echo ( $item['header'] ? '<h3>'.$item['header'].'</h3>' : '' );
				// 					        			if ( $item['item'] ):
				// 					        				echo '<ul class="'.$item['list_style'].'">';
				// 					        				foreach ( $item['item'] as $list ):
				// 					        					echo '<li>';
				// 					        						if ( $list['link'] ):
				// 					        							if ( $list['link']['url'] ):
				// 					        								echo '<a href="'.$list['link']['url'].'" target="'.( $list['link']['target'] ? '_blank' : '_self').'">';
				// 					        							endif;
				// 					        						endif;
				// 					        							echo $list['list_item'];
				// 					        						if ( $list['link'] ):
				// 					        							if ( $list['link']['url'] ):
				// 					        								echo '</a>';
				// 					        							endif;
				// 					        						endif;
				// 					        					echo '</li>';
									   
				// 					        				endforeach;
				// 					        				echo '</ul>';
				// 					        			endif;
				// 					        		echo '</div>';
				// 				        		endforeach;
				// 				        	echo '</div>';
				// 			        	echo '</div>';
				// 			        echo '</div>';
				// 			    endif;
				// 			elseif( get_row_layout() == 'accordion' ):
				// 		    	if ( get_sub_field('accordion') ):
				// 			    	echo '<div class="content-accordion">';
				// 			        	echo '<div class="container">';
				// 			        		echo '<ul uk-accordion>';
				// 				        		foreach ( get_sub_field('accordion') as $key => $item):
				// 				        			echo '<li' .( ( $key == 0 ) ? " class='uk-open'" : "" ).'>';
				// 				        				echo '<a class="uk-accordion-title" href="#">'.$item['title'].'</a>';
				// 				        				echo '<div class="uk-accordion-content">';
				// 				        					echo $item['description'];
				// 				        				echo '</div>';
				// 				        			echo '</li>';
				// 					        	endforeach;
				// 					        echo '</ul>';
				// 			        	echo '</div>';
				// 			        echo '</div>';
				// 			    endif;
				// 	        elseif( get_row_layout() == 'content' ):
				// 	        	if ( get_sub_field('content') ):
				// 	        		echo '<div class="text-content">';
				// 			        	echo '<div class="container">';
				// 				        	echo get_sub_field('content');
				// 			        	echo '</div>';
				// 			        echo '</div>';
				// 			    endif;
				// 	        elseif( get_row_layout() == 'destination_guides' ): 
				// 	        	echo '<div class="destination-guide">';
				// 	        		echo '<div class="container">'; 
				// 	        			$guide = get_sub_field('destination');
				// 	        			if ( $guide['title'] ):
				// 	        				echo '<h3>'.$guide['title'].'</h3>';
				// 	        			endif;
				// 	        			if ( $guide['description'] ):
				// 	        				echo '<p class="description">'.$guide['description'].'</p>';
				// 	        			endif;
				// 	        			if ( $guide['dropbox'] ):
				// 	        				$posts = get_pages(
				// 						        array(
				// 						            'post_type'  	=> 'page',
				// 						            'numberposts' 	=> -1,
				// 						            'orderby' 		=> 'title',
				// 						            'order'         => 'ASC',
				// 						            'parent' => '382'
				// 						        )
				// 						    );
				// 						    if( ! $posts ) return;
				// 						    echo '<div class="selector-form">';
				// 						    	echo '<h3>Select a country</h3>';
				// 							    echo '<form id="selector">';
				// 							    	echo '<div class="select-container">';
				// 									    $out = '<select id="wpse34320_select"><option value="#">Select a Country</option>';
				// 									    foreach( $posts as $p ):
				// 									        $out .= '<option value="' . get_permalink( $p ) . '">' . esc_html( $p->post_title ) . '</option>';
				// 									    endforeach;
				// 									    $out .= '</select>';
				// 									    echo $out;
				// 									echo '</div>';
				// 								    echo '<div class="button-container">';
				// 								    	echo '<div class="foobarsubmit"><div class="primary button">See guide</div></div>';
				// 								    echo '</div>';
				// 								echo '</form>';
				// 								echo '<div class="ajax">';
				// 								echo '</div>';
				// 							echo '</div>';
				// 	        			endif;
				// 	        			if ( $guide['quick_links'] ):
				// 	        				echo '<div class="uk-grid" uk-grid>';
				// 			        			foreach ( $guide['quick_links'] as $item ):
				// 			        				$banner =  get_field( 'banner', $item->ID );
				// 			        				echo '<div class="uk-width-expand">';
				// 			        					if ( $banner ):
				// 			        						$banner = 'style="background-image:url('.$banner['banner_image']['url'].')"';
				// 			        					endif;
				// 			        					echo '<div '.$banner.'>';
				// 			        						echo '<div class="uk-overlay-primary uk-flex uk-flex-middle uk-flex-center">';
				// 				        						echo '<div>';
				// 						        					echo '<div class="text-section">';
				// 						        						echo '<h3 class="title">';
				// 						        							echo $item->post_title;
				// 						        						echo '</h3>';
				// 						        					echo '</div>';
				// 						        					echo '<a href="'.get_permalink( $item->ID ).'">';
				// 						        						echo '<button class="secondary button">See guide</button>';
				// 						        					echo '</a>';
				// 						        				echo '</div>';
				// 						        			echo '</div>';
				// 				        				echo '</div>';
				// 			        				echo '</div>';
				// 			        			endforeach;
				// 			        		echo '</div>';
				// 		        		endif;
				// 	        		echo '</div>';
				// 	        	echo '</div>';
				// 	        elseif( get_row_layout() == 'cf_dropdown' ): 
				// 	        	echo '<div class="cf-dropdown">';
				// 	        		echo '<div class="container">';
				// 	        			echo '<h3>Select a form</h3>';
				// 	        			$args = array(
				// 	        				'post_type' => 'page',
				// 	        				'meta_query' => array(
				// 						        array(
				// 						            'key' => '_wp_page_template',
				// 						            'value' => 'template-tfa.php',
				// 						        )
				// 						    )
				// 	        			);
				// 	        			$query = new WP_Query( $args );
				// 	        			if ( $query->have_posts() ):
				// 							echo '<div>';
				// 								echo '<div class="select-container">';
				// 									echo '<select class="form">';
				// 										echo '<option value="-1">Please choose from below</option>';
				// 										while ( $query->have_posts() ):
				// 											$query->the_post();
				// 											//pre($query->post);
				// 											echo '<option value="'.get_permalink($query->post->ID).'">'.$query->post->post_title.'</option>';
				// 										endwhile;
				// 									echo '</select>';
				// 								echo '</div>';											    
				// 						    echo '</div>';
				// 						    wp_reset_postdata();
				// 					    endif;
				// 	        		echo '</div>';
				// 	        	echo '</div>';
				// 	     //    elseif( get_row_layout() == 'moving_dropdown' ): 
				// 	     //    	echo '<div class="cf-dropdown moving">';
				// 	     //    		echo '<div class="container">';
				// 	     //    			echo '<h3>Popular international destinations</h3>';
				// 	     //    			$posts = get_pages(
				// 					 //        array(
				// 					 //            'post_type'  	=> 'page',
				// 					 //            'numberposts' 	=> -1,
				// 					 //            'orderby' 		=> 'title',
				// 					 //            'order'         => 'ASC',
				// 					 //            'parent' => '382'
				// 					 //        )
				// 					 //    );
				// 	     //    			if( ! $posts ) return;
				// 						// echo '<div>';
				// 						// 	echo '<div class="select-container">';
				// 						// 		$out = '<select class="form">';
				// 						// 			$out .='<option value="-1">Where are you moving to?</option>';
				// 						// 			foreach( $posts as $p ):
				// 						// 				$out .= '<option value="'.get_permalink( $p ).'">'. esc_html( $p->post_title ) .'</option>';
				// 						// 			endforeach;
				// 						// 		$out .= '</select>';
				// 						// 		echo $out;
				// 						// 	echo '</div>';											    
				// 					 //    echo '</div>';
				// 					 //    wp_reset_postdata();
				// 	     //    		echo '</div>';
				// 	     //    	echo '</div>';
				// 	        elseif( get_row_layout() == 'call_to_action_block' ): 
				// 	        	echo '<div class="call-to-action">';
				// 	        		echo '<div class="container">';
				// 	        			echo 'Call to Action Block';
				// 	        		echo '</div>';
				// 	        	echo '</div>';
				// 	        elseif( get_row_layout() == 'ip_module' ):
				// 	        	echo '<div class="ipajax"></div>';
				// 	        endif;
				// 	    endwhile;
				// 	echo '</div>';
				// endif;
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer('office'); ?> 