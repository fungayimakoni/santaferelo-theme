<?php
/**
 * Template Name: Page
 * 
 * This is the template for the page.
 * 
 * @package SantaFe
 * @subpackage SantaFe
 * @since 1.0.0
 */
get_header();
?>
<div class="container">
    <div class="row">
      
            <h1 class="page-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
    
    </div>
</div>
<?php
get_footer();
?>










