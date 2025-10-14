<?php
if(get_field('form_assembly_id') ):
	get_header('form');
else:
	get_header();
endif;
if(is_grandchild_page()) :
	?>
    <?php
	echo '<section class="main-layout inner-page-layout thank-you-page">';
		echo '<div class="default-container">';
			echo '<div class="container">';
				echo get_the_content();
			echo '</div>';
		echo '</div>';
		$block = get_field( 'multicolor-banner', 'option' );
		echo '<div class="multicolor-banner" style="display:none;background-image: linear-gradient(80deg, '.$block['background_color_-_left'].', '.$block['background_color_-_right'].');">';
    		echo '<div class="container">';
    			echo '<div class="banner-logo">';
					echo '<img src="'.$block['banner_logo']['url'].'">';
				echo '</div>';
				echo '<div class="banner-description">';
					echo $block['banner_description'];
				echo '</div>';
			echo '</div>';
    	echo '</div>';
    	$review = get_field('testimonial', 'option');
    	echo '<div class="review" style="display:none;">';
    		echo '<div class="container">';
    			if ( $review['reviews'] ):
    				echo '<div class="uk-grid-large" uk-grid>';
	        			foreach (  $review['reviews'] as $item ):
	        				echo '<div class="uk-width-expand">';
	        					echo ( $item['review'] ? '<div class="testimonial">'.myTruncate2($item['review'],200).'</div>' : '' );
	        					echo ( $item['name'] ? '<div class="client">'.$item['name'].'</div>' : '' );
	        					echo ( $item['star_rating'] ? '<div id="rating"><span class="stars">'.$item['star_rating'].'</span></div>' : '' );
		        			echo '</div>';
	        			endforeach;
        			echo '</div>';
        		endif;
        		if ( $review['button'] ):
        			echo '<div class="review-button">';
        				echo ( $review['button'] ? '<a href="'.$review['button']['url'].' target="'.( $review['button']['target'] ? "_blank" : "_self").' class="icon-link secondary button">'.$review['button']['title'].'</a>' : '' );
        			echo '</div>';
        		endif;
    		echo '</div>';
    	echo '</div>';
echo '</section>';
else:
	if(get_field('form_assembly_id')):
		echo '<section class="main-layout inner-page-layout">';
			echo '<div class="default-container">';
				echo '<div class="row">';
					global $post;
					if ( get_field( 'form_assembly_id' ) ):
						$forms = get_field( 'form_assembly_id' );
						echo '<div class="container">';
							echo do_shortcode('[formassembly formid="'.$forms.'" server="https://santafe.tfaforms.net"]');
						echo '</div>';
					endif;
				echo '</div>';
				if ( get_field( 'custom_css' )):
					echo '<div class="custom-css">';
						echo '<style type="text/css">';
							echo get_field('custom_css');
						echo '</style>';
						echo get_field('custom_javascript');
					echo '</div>';
				endif;
			echo '</div>';
		echo '</section>';
	else:
		wpb_set_post_views(get_the_ID());
		echo '<section class="main-layout inner-page-layout">';
			echo '<div class="container-fluid default-container">';
				echo '<div class="featured-image">';
					echo '<div class="row">';
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						echo '<div class="responsive uk-cover-container '.( $featured_img_url ? '' : 'no-image').'">';
							if ($featured_img_url):
								echo '<img src="'.$featured_img_url.'" alt="'.get_the_title().'" uk-cover>';
							endif;
							echo '<div class="uk-overlay uk-position-cover uk-overlay uk-overlay-primary uk-light uk-flex uk-flex-center uk-flex-middle">';
								echo '<div class="container">';
									echo '<div class="row">';
										echo '<div uk-grid>';
											echo '<div class="uk-width-5-6@l">';
												//echo '<span>White paper</span>';
												if(get_field('banner_black')):
													echo '<span>'.get_field('banner_black').'</span>';
												endif;
												echo '<h1>'.get_the_title().'</h1>';
												// echo '<div>'.get_post_time( 'd/m/Y' ).'</div>';
												// echo '<div>Author: Santa Fe Relocation</div>';
												$link = '';
												$title = '';
												if(get_field('button_type') == 'pdf'):
													if(get_field('wp_file_upload')):
														$item = get_field('wp_file_upload');
														$link = $item['url'];
														$title = 'Download your copy';
													endif;
												elseif(get_field('button_type') == 'form'):
													if(get_field('form_page')):
														$link = get_field('form_page');
														$title = 'Download';
													endif;
												endif;
												if(get_field('wp_file_upload') || get_field('form_page')):
													echo '<div class="cta">';
														echo '<a href="'.$link.'">'.$title.'</a>';
													echo '</div>';
												endif;
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				if (empty_content($post->post_content)) :
				else:
					echo '<div class="row main-content">';
						echo '<div class="container">';
							the_content();
						echo '</div>';
					echo '</div>';
				endif;
				$author = get_field('authors_block');
				if( $author ):
					echo '<div class="row">';
						echo '<div class="author-content">';
							echo '<div class="container">';
								echo '<h3 class="uk-text-center">Authors</h3>';
								echo '<div class="uk-child-width-1-2@m" uk-grid>';
								foreach($author as $item):
									echo '<div>';
										echo '<div class="uk-grid-collapse" uk-grid>';
											if($item['image']):
												echo '<div class="profile-image uk-width-1-3@s">';
													echo '<img src="'.$item['image']['url'].'" class="uk-border-circle" alt="'.$item['name'].'">';
												echo '</div>';
											endif;
											if( $item['name'] || $item['title'] || $item['description'] ):
												echo '<div class="profile-meta uk-width-2-3@s">';
													if($item['name']):
														echo '<div class="name">'.$item['name'].'</div>';
													endif;
													if ($item['title']):
														echo '<div class="title">'.$item['title'].'</div>';
													endif;
													if( $item['description'] ):
														echo '<div class="description">'.$item['description'].'</div>';
													endif;
												echo '</div>';
											endif;
										echo '</div>';
									echo '</div>';
								endforeach; 
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				// if( get_field('enable_mobility') ):
				// 	if( get_field('image', 'option') || get_field('description', 'option') || get_field('file', 'option') || get_field('video', 'option') ):
				// 		echo '<div class="row">';
				// 			echo '<div class="mobility-global">';
				// 				echo '<div class="container">';
				// 					echo '<div class="uk-child-width-1-2@m uk-grid-collapse" uk-grid>';
				// 						if( get_field('image', 'option') ):
				// 							$img = get_field('image', 'option');
				// 							echo '<div>';
				// 								echo '<img src="'.$img['url'].'">';
				// 							echo '</div>';
				// 						endif;
				// 						if ( get_field('description', 'option') || get_field('file', 'option') || get_field('video', 'option') ):
				// 							if ( get_field('description', 'option') ):
				// 								echo '<div>';
				// 									echo get_field('description', 'option');
				// 									if ( get_field('file', 'option') || get_field('video', 'option') ):
				// 										echo '<div class="buttons-row">';
				// 											if( get_field('video', 'option') ):
				// 												// //echo '<a class="video" href=#>Watch our video</a>';
				// 												// echo '<a class="video" href="#modal-media-youtube" uk-toggle>Watch our video</a>';
				// 												// echo '<div id="modal-media-youtube" class="uk-flex-top" uk-modal>
				// 												// 	    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
				// 												// 	        <button class="uk-modal-close-outside" type="button" uk-close></button>
				// 												// 	        <iframe src="https://www.youtube-nocookie.com/embed/'.get_field('video', 'option').'" frameborder="0" uk-video></iframe>
				// 												// 	    </div>
				// 												// 	</div>';
				// 												echo '<a class="video" href="#">Learn more</a>';
				// 											endif;
				// 											if( get_field('file', 'option') ):
				// 												$pdf = get_field('file', 'option');
				// 												echo '<a class="pdf" href="'.$pdf['url'].'">Download a copy</a>';
				// 											endif;
				// 										echo '</div>';
				// 									endif;
				// 								echo '</div>';
				// 							endif;
				// 						endif;
				// 					echo '</div>';
				// 				echo '</div>';
				// 			echo '</div>';
				// 		echo '</div>';
				// 	endif;
				// endif;
				$args1 = array(
					'post_type' => get_post_type(get_the_ID()),
					'posts_per_page' => 4,
					'meta_key' => 'wpb_post_views_count',
					'orderby' => 'meta_value_num',
					'order' => 'DESC',
				);
				$query = new WP_Query( $args1 );
				if ( $query->have_posts()):
					echo '<div class="row">';
						echo '<div class="blog-tabs">';
							echo '<div class="container uk-margin">';
								if ( $query->have_posts() ):
									echo '<h3 class="uk-text-center">Popular white papers</h3>';
									echo '<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-grid-match page-listing" uk-grid>';
										while ( $query->have_posts() ):
											$query->the_post();
											echo '<div class="uk-card">';
												echo '<a href="'.get_permalink(  $query->post->ID ).'">';
													echo '<div class="cards-bg">';
														echo '<div class="uk-card-media-top">';
															$img = get_the_post_thumbnail_url(get_the_ID(),'full');
															echo '<div class="uk-background-cover" style="background-image: url('.$img.');">';
																echo '<span>White paper</span>';
															echo '</div>';
														echo '</div>';
														echo '<div class="uk-card-body">';
															echo '<p class="uk-text-bold">'.get_the_title( $query->post->ID ).'</p>';
															echo '<p class="date uk-position-bottom-left">Posted '.get_post_time( 'd/m/Y' ).'</p>';
														echo '</div>';
													echo '</div>';
												echo '</a>';
											echo '</div>';
										endwhile;
										wp_reset_postdata();
									echo '</div>';
								endif;
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				echo '<div class="container">';
					echo '<div class="row">';
						echo '<div class="share">';
							echo '<h4>Share this article</h4>';
							echo '<div class="social-media">';
								echo do_shortcode('[addtoany]');
							echo '</div>';
							echo '<div class="return">';
								$cpt = get_post_type( get_the_ID() );
								echo '<a href="'.get_post_type_archive_link($cpt).'"><span uk-icon="icon: chevron-left; ratio: 1.25"></span>Back to white papers</a>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</section>';
	endif;
endif;
if(get_field('form_assembly_id') ):
	get_footer('form');
else:
	get_footer();
endif;?> 