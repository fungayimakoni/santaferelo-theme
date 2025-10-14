<?php get_header(); ?>
	<section class="main-layout inner-page-layout">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-title"><h1><?php the_title(); ?></h1></div>
				</div>
				<div class="col-xs-12"><?php the_content(); ?></div>
			</div>
		</div>
	</section>
	<?php //get_template_part('module/dummy', 'layout'); ?>
<?php get_footer(); ?>