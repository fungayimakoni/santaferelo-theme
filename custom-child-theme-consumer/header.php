<!DOCTYPE html>
  <html class="no-js" lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="msvalidate.01" content="844CD17EDFE6BF0487964D9F445A19F6" />
      <meta name="facebook-domain-verification" content="gyf4i1srx0fcnq80g53apyz9jd6ruj" />
      <title></title>
  
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <?php wp_head(); ?>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/css/all.min.css" />
      <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://url.uk.m.mimecastprotect.com/s/X8K9COg0Zs4PJG1HNhniGj27o?domain=googletagmanager.com'+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P7TG873J');
        </script>
        <!-- End Google Tag Manager -->



    </head>
    <body <?php body_class(); ?> data-ajaxid="<?php echo get_the_ID(); ?>">
    <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src=https://url.uk.m.mimecastprotect.com/s/a3-uCNO68cXnARkipfNiyP1vU?domain=googletagmanager.com
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

    <?php
    /* Include file/slug from Theme Options Here */
    include(locate_template('inc/option-files.php'));
    echo '<main>';
      $country = get_country();
      $countries = get_field('country_languages', 'option');
      if( get_field('country_languages', 'option') && array_key_exists( $country, $countries) || ( $country == "PH" ) ):
        if( $country == "PH" ):
          $add = array( 'PH' => 'Philippines' );
          $countries = $countries + $add;
        endif;

      endif;
      echo '<div class="sidepanel">';
        get_template_part('inc/nav');
      echo '</div>';


      //echo '<header class="main-header" data-uk-sticky="top: 113; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">';
      echo '<div class="pick">';
        echo '<div class="top-header">';
          echo '<div class="container">';
            echo '<div class="row">';
              echo '<nav class="uk-navbar-container hidden-print uk-navbar-transparent" uk-navbar>';
                echo '<div class="uk-navbar-left">';
                  $menuArgss = array(
                      'theme_location' => 'new-top-menu-left',
                      'container' => false,
                      'menu_class' => 'uk-navbar-nav',
                      'depth' => 3
                  );
                  wp_nav_menu( $menuArgss );
                echo '</div>';

                echo '<div class="uk-navbar-right uk-position-right">';
                  if( in_array( get_the_ID(), (get_field('corporate_menu', 'options') ) ) ||  is_post_type_archive( 'mobility-survey' ) || is_post_type_archive( 'mobility-webinar' ) || is_post_type_archive( 'mobility-events' ) || is_post_type_archive( 'mobility-wpapers' ) || is_post_type_archive( 'mobility-wpapers' ) || is_post_type_archive( 'insights-news' ) ||  is_post_type_archive( 'moving-news' ) || is_singular( 'mobility-webinar' ) ):
                    $menuArgss = array(
                        'theme_location' => 'corp-new-top-menu-right',
                        'container' => false,
                        'menu_class' => 'uk-navbar-nav',
                        'depth' => 3
                    );?>
                   
<?php
                  elseif( in_array( get_the_ID(), (get_field('corporate_menu', 'options') ) ) ||  is_post_type_archive( 'mobility-survey' ) || is_post_type_archive( 'mobility-webinar' ) || is_post_type_archive( 'mobility-events' ) || is_post_type_archive( 'mobility-wpapers' ) || is_post_type_archive( 'mobility-wpapers' ) || is_post_type_archive( 'insights-news' ) || is_post_type_archive( 'moving-news' ) || is_singular( 'mobility-webinar' ) || (is_page_template( 'template-gltsingle.php' ) && (is_page(6939) || is_page(6942) )) || is_page_template( 'templates/template-divi.php' ) || is_page_template( 'templates/surveys.php' ) || is_page_template( 'templates/sustainability.php' ) || is_page_template( 'templates/blog.php' ) || is_singular('blog' ) || is_singular('survey') || is_singular('career')|| is_singular('insights-news') || is_page_template( 'template-archive-news.php' ) || is_page_template( 'templates/careers.php' ) || is_page_template('template-divi.php') || is_page_template('template-corporate.php') || is_page_template( 'events.php' ) || is_page_template( 'templates/sustainability.php' ) || is_singular('event') ):  //for corporate
                      $menuArgss = array(
                          'theme_location' => 'corp-new-top-menu-right',
                          'container' => false,
                          'menu_class' => 'uk-navbar-nav',
                          'depth' => 3
                      );
                  else:
                    $menuArgss = array(
                        'theme_location' => 'new-top-menu-right',
                        'container' => false,
                        'menu_class' => 'uk-navbar-nav',
                        'depth' => 3
                    );
                  endif;
                  // wp_nav_menu( $menuArgss );
                  ?>
                  <ul id="menu-corporate-top-navigation-right" class="uk-navbar-nav">
                    <?= get_corporate_phone();?>
                    <li id="menu-item-7445" class="menu-item menu-item-type-post_type_archive menu-item-object-offices menu-item-7445"><a href="https://www.santaferelo.com/contact/our-offices/">Our offices</a></li>
                    <li id="menu-item-7446" class="login-modal menu-item menu-item-type-custom menu-item-object-custom menu-item-7446"><a href="#login-modal" uk-toggle=""><i class="material-icons"> perm_identity </i></a></li>
                    <li id="menu-item-7447" class="cta-top menu-item menu-item-type-post_type menu-item-object-page menu-item-7447"><a href="https://www.santaferelo.com/corporate-relocation/corporate-form/">Contact us</a></li>
                  </ul>
                  <?php 
                echo '</div>';
              echo '</nav>'; 
            echo '</div>';
          echo '</div>';
        echo '</div>';
        echo '<header class="main-header">';
          echo '<div class="container">';
            echo '<div class="row" style="position:relative;display:flex;align-items:center;">';
              echo '<div class="col-9 col-lg-2 column-middle">';
                echo '<div class="main-logo">';

                  $url = get_bloginfo('url');
                  if( is_page_template( 'template-corporate.php' ) || is_page_template('template-version2.php') ):
                    $url = 'https://www.santaferelo.com/en/corporate-relocation/';
                  endif;

                  echo '<a href="'.$url.'">';
                    $image = get_field('main_header_logo', 'option')['url'];
                    // echo '<img src="'.get_stylesheet_directory_uri().'/img/santa_fe_relocation_logo_horizontal_rgb.svg" width="158" height="74" class="uk-preserve" uk-svg>';
                    echo '<img src="'.$image.'" width="158" height="74" class="uk-preserve" alt="Santa Fe Logo - Ukraine" style="height:100px;width:auto;">';
                    //echo '<img src="'.$image['url'].'" width="158" height="74" alt="Santa Fe Logo">';
                  echo '</a>';
                echo '</div>';
              echo '</div>';
              echo '<div class="d-lg-none column-middle uk-position-center-right">';
                echo '<div class="mobile-menu">';
                  echo '<div class="mobile-button-primary"></div>';
                  echo '<div class="mobile-menu-btn pull-right uk-position-center-right">';
                    echo '<div id="nav-icon1"><span></span><span></span><span></span></div>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
              echo '<div class="d-none d-lg-block col-lg-10 column-middle">';
                echo '<div class="desktop-menu ">';
                  echo '<nav class="uk-navbar-container hidden-print uk-navbar-transparent" uk-navbar>';
                    echo '<div class="uk-navbar-right ">';
                    
                        if( in_array( get_the_ID(), (get_field('corporate_menu', 'options') ) ) ||  is_post_type_archive( 'mobility-survey' ) || is_post_type_archive( 'mobility-webinar' ) || is_post_type_archive( 'mobility-events' ) || is_post_type_archive( 'mobility-wpapers' ) || is_post_type_archive( 'mobility-wpapers' ) || is_post_type_archive( 'insights-news' ) || is_post_type_archive( 'moving-news' ) || is_singular( 'mobility-webinar' ) || (is_page_template( 'template-gltsingle.php' ) && (is_page(6939) || is_page(6942) )) || is_page_template( 'templates/template-divi.php' ) || is_page_template( 'templates/surveys.php' ) || is_page_template( 'templates/sustainability.php' ) || is_page_template( 'templates/blog.php' ) || is_singular('blog' ) || is_singular('survey') || is_singular('career')|| is_singular('insights-news') || is_page_template( 'template-archive-news.php' ) || is_page_template( 'templates/careers.php' ) || is_page_template( 'events.php' ) || is_singular('event') ):  //for corporate

                          $menuArgss = array(
                             'theme_location' => 'corporate2021',
                              'container' => false,
                              'menu_class' => 'uk-navbar-nav',
                              'depth' => 3
                          );
                        elseif( is_page(9139) || is_page_template( 'template-corporate.php' ) || is_page_template( 'template-gms.php' ) ): //for corporate
                          $menuArgss = array(
                              'theme_location' => 'corporate2021',
                              'container' => false,
                              'menu_class' => 'uk-navbar-nav',
                              'depth' => 3
                          );
                        else: //for consumer
                          $menuArgss = array(
                              'theme_location' => 'new-primary',
                              'container' => false,
                              'menu_class' => 'uk-navbar-nav',
                              'depth' => 3
                          );
                        endif;
                        wp_nav_menu( $menuArgss );
                      
                    echo '</div>';
                  echo '</nav>'; 
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</header>';
      echo '</div>';
      echo '<div class="wrapper-holder">';