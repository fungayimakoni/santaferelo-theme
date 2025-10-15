<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <title></title>
  
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php
        if (get_field('opt_google_analytics', 'option')):
          if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false):
            the_field('opt_google_analytics', 'option');
          endif;
        endif;
      ?>
      <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php include(locate_template('inc/option-files.php')); ?>

    <aside class="sidepanel hidden-lg">
      <header class="header clearfix">
        <div class="mobile-menu-btn">
          <span class="fa fa-close"></span>
          <span class="close-btn">close</span>
        </div>
      </header>
      <?php get_template_part('inc/nav'); ?>
    </aside>
    <main class="main-panel">
      
      <header class="main-header <?php echo( $opt_stickyTop == true ) ? 'not-sticky' : '';  ?>">
        <div class="container">
          <div class="row row-size">
            <div class="col-9 col-lg-3 column-middle">
              <div class="main-logo">
                <a href="<?php echo get_bloginfo('url'); ?>">
                  <?php
                    if( $opt_generalLogo ) :
                      echo wp_get_attachment_image( $opt_generalLogo['ID'], 'full', false, array('class' => 'img-responsive') );
                    else :
                      if( $opt_generalTextLogo != '' ) :
                        echo '<span class="text-logo"><strong>'.$opt_generalTextLogo.'</strong></span>';
                      else :
                        echo '<img src="http://placehold.it/300x90" alt="Sytian Logo" class="img-responsive">';
                      endif;
                    endif;
                  ?>
                </a>
              </div>
            </div>
            <div class="col-3 col-lg-9 column-middle">
              <div class="mobile-menu hidden-lg">
                <div class="mobile-menu-btn pull-right">
                  <span class="fa fa-bars"></span>
                </div>
              </div>
              <div class="desktop-menu hidden-xs hidden-sm hidden-md">
                <?php
                  if( $opt_generalPhone != '' || $opt_generalEmail != '' ) :
                    echo '<div class="website-details">';
                      if( $opt_generalPhone != '' ) :
                        echo '<span class="general-phone"><a href="tel:'.$opt_generalPhone.'">'.$opt_generalPhone.'</a></span>';
                      endif;

                      if( $opt_generalEmail != '' ) :
                        echo '<span class="general-email"><a href="mailto:'.$opt_generalEmail.'">'.$opt_generalEmail.'</a></span>';
                      endif;
                    echo '</div>';
                  endif;
                ?>
                <?php get_template_part('inc/nav'); ?>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="wrapper-holder <?php echo( $opt_stickyTop == true ) ? 'not-sticky' : '';  ?>">