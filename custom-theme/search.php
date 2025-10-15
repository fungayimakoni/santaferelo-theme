<?php get_header(); ?>
	<?php

		$args = array(
			'post_type' => 'any',
			'post_status' => 'publish',
			's' => $s
		);

	?>
	<section class="main-layout search-layout">
		<div class="search-content">
			<div class="container">
				<?php
					$the_query = new WP_Query( $args );

					// The Loop
					if ( $the_query->have_posts() ) :
						echo '<div class="row">';
							while ( $the_query->have_posts() ) : $the_query->the_post();
					  		echo '<div class="col-12 search-details">';
					  			echo '<a href="'.get_permalink().'" class="search-link"><h4>'.get_the_title().'</h4></a>';
					  			echo '<p>'.max_character(get_the_excerpt(), 200).'</p>';
					  		echo '</div>';
							endwhile;
						echo '</div>';
					else : 
						echo '<div class="row">';
							echo '<div class="col-12 text-center">';
								echo '<span class="fa fa-exclamation-triangle fa-5x"></span>';
								echo '<h2 class="text-center">No Result for '.$s.'</h2>';
							echo '</div>';
						echo '</div>';
					endif;
					// Reset Post Data
					wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>