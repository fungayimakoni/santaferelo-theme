<?php 
if (!defined('ABSPATH')) exit;
get_header(); ?>
	<section class="main-layout inner-page-layout">
		<div class="container default-container">
			<div class="row">
				<div class="col-xs-12"><?php the_content(); ?></div>
			</div>
		</div>
	</section>
	<?php //get_template_part('module/dummy', 'layout'); ?>
<?php get_footer(); ?>