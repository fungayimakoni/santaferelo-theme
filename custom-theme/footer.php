	</div>

	<?php
      /* Include file/slug from Theme Options Here */
      include(locate_template('inc/option-files.php'));
    ?>

	<footer class="footer">
		<div class="container">
			<div class="row row-size">
				<div class="col-12 col-sm-6 column-middle">
					<?php
						if( $opt_generalCopyright != '' ) :
							echo '<div class="copyright">';
								echo '<p>'.$opt_generalCopyright.'</p>';
							echo '</div>';
						else :
							echo '<div class="copyright">';
								echo '<p>Copyright © '.date('Y').'. All Rights Reserved.</p>';
							echo '</div>';
						endif;
					?>
					<?php if(have_rows('opt_social_media_list', 'option')): ?>
                        <div class="social">
                            <?php while (have_rows('opt_social_media_list', 'option')) : the_row(); ?>
                            	<?php
                            	$type = "";
                            	if(get_sub_field('social_icon_type', 'option') == 'simple'):
                            		$type = "";
                            	elseif (get_sub_field('social_icon_type', 'option') == 'square'):
                            		$type = "-square";
                            	elseif (get_sub_field('social_icon_type', 'option') == 'round'):
                            		$type = "-circle";
                            	endif;
                            	?>
                                <a href="<?php echo get_sub_field('social_media_url', 'option'); ?>" class="social fa fa-<?php echo get_sub_field('social_media', 'option'); ?><?php echo $type; ?>" target="_blank"></a>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
				</div>

				<div class="col-12 col-sm-6 column-middle">
					<figure class="sytian-logo">
						<a href="https://www.sytian-productions.com/" target="_blank">
							Web Design Philippines
							<!-- <img src="<?php //echo get_bloginfo('template_directory'); ?>/img/sytian-logo-white.png" alt="Sytian IT Solution" class="img-responsive"> -->
						</a>
					</figure>
				</div>
			</div>
		</div>
	</footer>
	</main>

    <?php // PAGE LOADER ?>
		<div class="loader-overlay">
			<div class="loader">
				<div class="loader-img">
					<span class="fa fa-spinner fa-pulse fa-5x"></span>
				</div>
			</div>
		</div>
	<?php // BACK TO TOP ?>
	<div class="back-to-top">
		<a href="javascript: void(0);" rel="nofollow"><span class="fa fa-arrow-up"></span></a>
	</div>
    <?php  wp_footer();?>
	</body>
</html>

