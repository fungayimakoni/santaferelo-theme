<!DOCTYPE html>
  <html class="no-js" lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="msvalidate.01" content="844CD17EDFE6BF0487964D9F445A19F6" />
      <title></title>
  
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php wp_head(); ?>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script type=”text/javascript”>
        function setCookie(name, value, days){
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000)); 
            var expires = “; expires=” + date.toGMTString();
            document.cookie = name + “=” + value + expires;
        }
        function getParam(p){
            var match = RegExp(‘[?&]’ + p + ‘=([^&]*)’).exec(window.location.search);
            return match && decodeURIComponent(match[1].replace(/\+/g, ‘ ‘));
        }
        var gclid = getParam(‘gclid’);
        if(gclid){
            var gclsrc = getParam(‘gclsrc’);
            if(!gclsrc || gclsrc.indexOf(‘aw’) !== -1){
                setCookie(‘gclid’, gclid, 90);
            }
        }
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23323737-7"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-23323737-7');
        </script> 
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5ZMHW2W');</script>
        <!-- End Google Tag Manager --> 
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <!-- TrustBox script -->
        <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
        <!-- End TrustBox script -->

    </head>
    <body <?php body_class(); ?> data-ajaxid="<?php echo get_the_ID(); ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZMHW2W"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        <!--
        Start of Floodlight Tag: Please do not remove
        Activity name of this tag: Santa Fe Form Completed
        URL of the webpage where the tag is expected to be placed: http://tbc.com
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 03/07/2019
        -->
    <?php 
    $psf = array( 1968,3566,2212,2218,2220,2222,2234,2204,2246,2210,2251,2255,2258,2260,2262,2264,2270,2275,3496,2278,2282,2285,2300,2302,2304,2306,2365,2308,2332,2312,2315,2320,2322,2325,2328,2166,2139,1971,2010,1973,1942,1960,1952,2139,1947,4202, 1963);
    if(is_page($psf) || is_single($psf)): ?>
    <script type="text/javascript">
    var axel = Math.random() + "";
    var a = axel * 10000000000000;
    document.write('<iframe src="https://9217706.fls.doubleclick.net/activityi;src=9217706;type=santa00;cat=santa0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
    </script>
    <noscript>
    <iframe src="https://9217706.fls.doubleclick.net/activityi;src=9217706;type=santa00;cat=santa0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
    </noscript>
    <!-- End of Floodlight Tag: Please do not remove -->
    <?php endif; ?>
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
        echo '<div class="off-canvas-ip">';
          echo '<div class="container">';
            echo '<div class="uk-inline">';
              echo '<div class="uk-position-center">';
                echo '<div class="uk-child-width-1-2@l" uk-grid>';
                  echo '<div>';
                    echo 'View content and offers specific to your location';
                  echo '</div>';
                  echo '<div>';
                    echo '<div class="uk-position-center-right">';
                      echo '<form method="POST" action="/en/" id="selectorform">';
                        echo '<select class="country_flags-selecttop" name="country_select">';
                          echo '<option >'.$item.'</option>';
                          foreach( $countries as $key=>$item ):
                            if($item == "Hong Kong SAR China"){
                              $item = 'HKG';
                            };
                            if($item == "India"){
                              $item = 'IND';
                            };
                            if($item == "Singapore"){
                              $item = 'SGP';
                            };
                            if($item == "Thailand"){
                              $item = 'THA';
                            };
                            if($item == "United Arab Emirates"){
                              $item = 'UAE';
                            };
                            if($item == "United Kingdom"){
                              $item = 'GBR';
                            };
                            if($item == "United States"){
                              $item = 'USA';
                            };
                            if($item == "Philippines"){
                              $item = 'PHL';
                            };
                            $small = strtolower($key);
                            echo '<option '.( ( $country == $key ) ? 'selected="true"' : '' ).' value="'.$key.'" data-image="'.get_stylesheet_directory_uri().'/img/blank.gif" data-imagecss="flag '.$small.'" data-title="'.$item.'">'.$item.'</option>';
                          endforeach;
                        echo '</select>';
                        echo '<span class="button"><input type="submit" value="Continue"></span>';
                      echo '</form>';
                      echo '<a href="/"><span uk-icon="icon: close;"></span></a>';
                    echo '</div>';
                  echo '</div>';
                echo '</div>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      endif;
      echo '<div class="sidepanel">';
        get_template_part('inc/nav');
      echo '</div>';


      //echo '<header class="main-header" data-uk-sticky="top: 113; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">';
      echo '<div uk-sticky>';
        echo '<div class="top-header">';
          echo '<div class="container">';
            echo '<div class="row">';
              echo '<nav class="uk-navbar-container hidden-print uk-navbar-transparent" uk-navbar>';
                echo '<div class="uk-navbar-right">';
                  $menuArgss = array(
                      'theme_location' => 'top-menu',
                      'container' => false,
                      'menu_class' => 'uk-navbar-nav',
                      'depth' => 3
                  );
                  wp_nav_menu( $menuArgss );
                echo '</div>';
              echo '</nav>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
        echo '<header class="main-header">';
          echo '<div class="container">';
            echo '<div class="row" style="position:relative;">';
              echo '<div class="col-xs-9 col-lg-2 column-middle">';
                echo '<div class="main-logo">';
                  echo '<a href="'.get_bloginfo('url').'">';
                    $image = get_field('main_header_logo', 'option');
                    echo '<img src="'.$image['url'].'" width="158" height="74" alt="Santa Fe Logo">';
                  echo '</a>';
                echo '</div>';
              echo '</div>';
              echo '<div class="hidden-lg column-middle uk-position-center-right">';
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
                    echo '<div class="uk-navbar-right">';
                      $menuArgss = array(
                          'theme_location' => 'primary',
                          'container' => false,
                          'menu_class' => 'uk-navbar-nav',
                          'depth' => 3
                      );
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