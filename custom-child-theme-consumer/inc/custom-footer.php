<footer class="footer">
	<div class="container">
		<div class="row row-size">
			<div class="col-xs-12 col-sm-6 column-middle">
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
              <a href="<?php echo get_sub_field('social_media_url', 'option'); ?>" class="social fa fa-<?php echo get_sub_field('social_media', 'option'); ?>" target="_blank"></a>
            <?php endwhile; ?>
        	</div>
        <?php endif; ?>
			</div>

			<div class="col-xs-12 col-sm-6 column-middle">
				<figure class="sytian-logo">
					<a href="https://www.sytian-productions.com/" target="_blank">Web Designer Philippines</a>
				</figure>
			</div>
		</div>
	</div>
</footer>