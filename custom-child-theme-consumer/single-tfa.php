<?php get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				global $post;
				if (empty_content($post->post_content)) :
				else:
					echo '<div class="container">';
						the_content();
					echo '</div>';
				endif;
				if ( get_field( 'form_assembly_forms', 'option' ) ):
					$forms = get_field( 'form_assembly_forms', 'option' );
					foreach ( $forms['form_list'] as $form ):
						$postid = url_to_postid( $form['page'] );

						if ( $form['page'] == get_the_ID() ):
							echo '<div class="container">';
								echo do_shortcode('[formassembly formid="'.$form['form_assembly_id'].'" server="https://santafe.tfaforms.net"]');
							echo '</div>';
						endif;
					endforeach;
				endif;
			echo '</div>';
			if ( get_field( 'custom_css' )):
				echo '<div class="custom-css">';
					echo get_field('custom_css');
					echo get_field('custom_javascript');
				echo '</div>';
			endif;
		echo '</div>';
	echo '</section>';
get_footer('form'); ?> 