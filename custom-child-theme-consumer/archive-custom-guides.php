<?php get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				echo '<div class="container">';
					echo '<div class="text-content">';
						if (get_field('cheader_office', 'option' ) ):
							echo '<h1>'.get_field('cheader_office', 'option' ).'</h1>';
						endif;
						if (get_field('cdescription_office', 'option' ) ):
							echo get_field('cdescription_office', 'option' );
						endif;
					echo '</div>';
				echo '</div>';
				// echo '<div class="guides">';
				// 	echo '<div class="container">';
				// 		echo '<h3 class="uk-text-center">';
				// 			echo 'Please select a country';
				// 		echo '</h3>';
				// 		echo '<div class="select-ajax uk-text-center">';
				// 			$args		    = array(
				// 			    'post_type'         => 'custom-guides',
				// 			    'posts_per_page'   	=> -1,
				// 			    'orderby'			=> 'title',
				// 			    'order'				=> 'ASC',
				// 			);
				// 			$query		    = new WP_Query( $args );
				// 			echo '<div class="select-container">';
				// 				echo '<select class="country-guides">';
				// 					echo '<option value="#">Please select a country</option>';
				// 					if ( $query->have_posts() ):
				// 						while ( $query->have_posts() ):
				// 							$query->the_post();
				// 							echo '<option value="'.get_permalink( $query->post->ID ).'">'.$query->post->post_title.'</option>';
				// 						endwhile;
				// 					endif;
				// 				echo '</select>';
				// 			echo '</div>';
				// 			echo '<button class="primary button" disabled>View guides</button>';
				// 		echo '</div>';

				// 		echo '<div class="toggle uk-text-center" uk-toggle="target: #toggle-office">';
				// 			echo '<span>Show</span> full country list <i uk-icon="icon: chevron-down;"></i>';
				// 		echo '</div>';

				// 	echo '</div>';
				// echo '</div>';

				// echo '<div id="toggle-office" hidden>';
				// 	echo '<div class="container">';
				// 		echo '<h3>Full country list</h3>';
				// 		$continent = get_terms( array(
				// 		    'taxonomy' 		=> 'continent',
				// 		    'orderby'  		=> 'id',
				// 		    'order'			=> 'ASC',
				// 		    'post_types' 	=> 'custom-guides',
				// 		    'hide_empty'	=> true,
				// 		) );
				// 	echo '</div>';

				// 	if ( $continent ):
				// 		echo '<div class="country-tab">';
				// 			echo '<div class="tab-component">';
				// 				echo '<div class="container">';
				// 					echo '<ul uk-switcher="connect: #my-id" uk-tab>';
				// 						foreach($continent as $item):
				// 							echo '<li><a href="#">'.$item->name.'</a></li>';
				// 						endforeach;
				// 					echo '</ul>';
				// 				echo '</div>';
				// 			echo '</div>';

				// 			echo '<div class="container uk-margin">';
				// 				echo '<ul id="my-id" class="uk-switcher uk-margin">';
				// 					foreach($continent as $item):
				// 						echo '<li>';
				// 							echo '<div class="country-list uk-child-width-1-2@s uk-child-width-1-4@l" uk-grid="masonry: true">';
				// 								$args = array(
				// 									'post_type' => 'custom-guides',
				// 									'orderby'	=> 'name',
				// 									'order'		=> 'ASC',
				// 									'nopaging'	=> true,
				// 									'tax_query' => array(
				// 										array(
				// 											'taxonomy' => 'continent',
				// 											'field'    => 'slug',
				// 											'terms'    =>  $item->slug,
				// 										),
				// 									),
				// 								);
				// 								$query = new WP_Query( $args );
				// 								if ( $query->have_posts() ):
				// 									echo '<div>';
				// 										echo '<div class="card-body">';
				// 											echo '<ul>';
				// 												while ( $query->have_posts() ):
				// 													$query->the_post();
				// 											  		echo '<li><h6><a href="'.get_permalink( $query->post->ID ).'">'.$query->post->post_title.'</a><span uk-icon="icon: chevron-right; ratio: 1"></span></h6</li>';
				// 										    	endwhile;
				// 										    echo '</ul>';
				// 										echo '</div>';
				// 								    echo '</div>';

				// 							    endif;
				// 							echo '</div>';
				// 					    echo '</li>';

				// 					endforeach;
				// 					wp_reset_query();
									
				// 				echo '</ul>';
				// 			echo '</div>';
				// 		echo '</div>';
				// 	endif;
				// echo '</div>';

				if (get_field('cdescription_office_low', 'option' ) ):
					echo '<div class="container">';	
						echo '<div class="text-content lower">';
							echo get_field('cdescription_office_low', 'option' );
						echo '</div>';
					echo '</div>';
				endif;

			echo '</div>';

		echo '</div>';
	echo '</section>';
get_footer(); ?> 