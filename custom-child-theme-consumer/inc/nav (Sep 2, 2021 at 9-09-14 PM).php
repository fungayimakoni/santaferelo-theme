<nav class="nav hidden-print">
    <?php
       if( in_array( get_the_ID(), (get_field('corporate_menu', 'options') ) ) ||  is_post_type_archive( 'mobility-survey' ) || is_post_type_archive( 'mobility-webinar' ) || is_post_type_archive( 'mobility-events' ) || is_post_type_archive( 'mobility-wpapers' ) || is_post_type_archive( 'mobility-wpapers' ) || is_post_type_archive( 'insights-news' ) ):
            $menuArgss = array(
            	'menu_id' => 'menu-main-menu',
                'theme_location' => 'corporate2021',
                'container' => false,
                'menu_class' => 'menu list-unstyled open-sub',
                'depth' => 3
            );
        elseif( is_page(9139) || is_page_template( 'template-corporate.php' ) || (is_page_template( 'template-gltsingle.php' ) && (is_page(6939) || is_page(6942) )) ):
            $menuArgss = array(
                'menu_id' => 'menu-main-menu',
                'theme_location' => 'corporate2021',
                'container' => false,
                'menu_class' => 'menu list-unstyled open-sub',
                'depth' => 3
            );
        else:
            $menuArgss = array(
            	'menu_id' => 'menu-main-menu',
                'theme_location' => 'new-primary',
                'container' => false,
                'menu_class' => 'menu list-unstyled open-sub',
                'depth' => 3
            );
        endif;
      wp_nav_menu( $menuArgss );
    ?>
</nav>