<?php
/*
Template Name: Form Page
Template Post Type: page
*/

get_header('form');


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
				if ( have_rows('content_editor') ):
					echo '<div class="container">';
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
				if ( get_field( 'form_assembly_forms', 'option' ) ):
					$forms = get_field( 'form_assembly_forms', 'option' );
					foreach ( $forms['form_list'] as $form ):
						$postid = url_to_postid( $form['page'] );

						if ( $form['page'] == get_the_ID() ):
							echo '<div class="container">';
							if(is_page('641')){
									echo '<a class="button primary" href="https://www.santaferelo.com/cn/campaigns/moving-services-cn/moving-cn/">中文报价</a>';
								}
								echo do_shortcode('[formassembly formid="'.$form['form_assembly_id'].'" server="https://app.formassembly.com"]');
							echo '</div>';
						endif;
					endforeach;
				endif;
			echo '</div>';
			if ( get_field( 'custom_css' )):
				echo '<div class="custom-css">';
					echo '<style type="text/css">';
						echo get_field('custom_css');
					echo '</style>';
					if (get_field('custom_javascript')):
						echo '<script type="text/javascript">';
							echo get_field('custom_javascript');
						echo '</script>';
					endif;
				echo '</div>';
			endif;
		echo '</div>';
	echo '</section>';
get_footer('form'); ?> 