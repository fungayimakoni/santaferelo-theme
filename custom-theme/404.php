<?php get_header(); ?>
	<section class="error-page">
		<h1 class="hidden">Page Not Found!</h1>
		<article class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<figure class="error-image">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/img/404-image.png" alt="404Image" class="img-responsive">
					</figure>
					<a href="<?php echo get_bloginfo('url'); ?>">
						<figure class="error-btn">
							<img src="<?php echo get_bloginfo('template_directory'); ?>/img/404-button.png" alt="404Image" class="img-responsive">
						</figure>
					</a>
				</div>
			</div>
		</article>
	</section>

<?php get_footer(); ?>