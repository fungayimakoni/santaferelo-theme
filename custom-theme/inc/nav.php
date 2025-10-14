<nav class="nav">
    <?php
        $menuArgs = array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'menu list-unstyled open-sub',
            'depth' => 3
        );
        wp_nav_menu( $menuArgs );
    ?>
</nav>