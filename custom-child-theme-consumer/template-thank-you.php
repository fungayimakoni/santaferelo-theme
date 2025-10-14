<?php
/**
 * Template Name: Thank you
 * Template Post Type: mobility-webinar, mobility-survey, mobility-wpapers, mobility-events,event-form
 */
get_header('form');?>
<section class="main-layout inner-page-layout thank-you-page">
    <div class="row">
        <article class='thank-you-wrapper'>
        <h3><?php the_title();?></h3>
            <?php the_content();?></article>

    </div>
</section>
<style>
    .thank-you-wrapper{
        max-width:1152px;
        margin:2rem auto;
    }
</style>
<?php get_footer();?>