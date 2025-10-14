<?php



require_once( trailingslashit( get_stylesheet_directory() ). 'module/functions.php' );
require_once( trailingslashit( get_stylesheet_directory() ). 'module/function-ajax.php' );
require_once( trailingslashit( get_stylesheet_directory() ). 'module/acf-predefined.php' );




// define('WP_HOME','http://santafe.local');
// define('WP_SITEURL','http://santafe.local');

/* PARENT THEME TO CHILD THEME FILES */
	function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    // if (is_page_template('template-tfa.php')){ 
    // }else{
        //wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.0.min.js', array(), '1.11.0');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.5.1.min.js', array(), '3.5.1');
    // };

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style( 'child-main', get_stylesheet_directory_uri() . '/css/main.css', array( $parent_style ),time(),'all');
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
    wp_enqueue_style( 'pages_mobile', get_stylesheet_directory_uri() . '/css/pages_mobile.css', array( $parent_style ));
    wp_enqueue_style( 'live-updates', get_stylesheet_directory_uri() . '/css/update.css', array( $parent_style ));
    wp_enqueue_style( 'odometer', get_stylesheet_directory_uri() . '/css/odometer-theme-default.css', array( $parent_style ));
    wp_enqueue_style( 'datepicker', get_stylesheet_directory_uri() . '/css/jquery-ui.min.css', array( $parent_style ));
    wp_enqueue_style( 'flag', get_stylesheet_directory_uri() . '/css/flags.css', array( $parent_style ));
    wp_enqueue_style( 'dd', get_stylesheet_directory_uri() . '/css/dd.css', array( $parent_style ));
    wp_enqueue_style( 'extend', get_stylesheet_directory_uri() . '/css/extend.css', array( $parent_style ));
    wp_enqueue_style( 'fronpage2020', get_stylesheet_directory_uri() . '/css/frontpage2020.css', array( $parent_style ));
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v6.4.0/css/all.css', array(), '6.4.0');

    wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/js/vendor/slick.min.js', array('jquery'), '1', true);
    wp_enqueue_script('datepicker', get_stylesheet_directory_uri() . '/js/vendor/jquery-ui.min.js', array('jquery'), '1', true);
    wp_enqueue_script('odometer-js', get_stylesheet_directory_uri() . '/dist/odometer.min.js', array(), '1', true);
    wp_enqueue_script('uikit', get_stylesheet_directory_uri() . '/js/vendor/uikit.min.js', array('jquery'), '1', true);
     wp_enqueue_script('zohoform', get_stylesheet_directory_uri() . '/dist/zohoform.js', array('jquery'), time(), true);
        wp_enqueue_script('validate', get_stylesheet_directory_uri() . '/dist/jquery.validate.js', array('jquery'), '1', true);
    wp_enqueue_script('additional-methods', get_stylesheet_directory_uri() . '/dist/additional-methods.js', array('jquery'), '1', true);
    wp_enqueue_script('prism', get_stylesheet_directory_uri() . '/dist/prism.js', array('jquery'), '1', true);
    wp_enqueue_script('intlTelInput', get_stylesheet_directory_uri() . '/dist/intlTelInput.js', array('jquery'), '1', true);
    wp_enqueue_script('uikit-icon', get_stylesheet_directory_uri() . '/js/vendor/uikit-icons.min.js', array('jquery'), '1', true);
    wp_enqueue_script('iso', get_stylesheet_directory_uri() . '/js/vendor/isotope-docs.min.js', array('jquery'), '1', true);
    wp_enqueue_script('geocomplete', get_stylesheet_directory_uri() . '/dist/geocomplete.js', array(), '1', true);
    wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/dist/main.js', array(), time(), true);
    wp_enqueue_script('ajax-js', get_stylesheet_directory_uri() . '/dist/ajax.js', array(), time(), true);
    wp_enqueue_script('ip-js', get_stylesheet_directory_uri() . '/dist/ipajax.js', array(), '1', true);
    wp_enqueue_script('detect-js', get_stylesheet_directory_uri() . '/dist/detect.min.js', array(), '1', true);
    
    wp_localize_script( 'ajax-js', 'adminajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

    wp_enqueue_script('flag-js', get_stylesheet_directory_uri() . '/dist/jquery.dd.min.js', array(), '1', true);
    if ( ( is_page( array (3518, 3566, 641,7725,7726,7728) ) ) || ( is_front_page() ) ){
        wp_enqueue_style( 'zoho_form', get_stylesheet_directory_uri() . '/css/zoho_form.css',[],time(),'all');
        // wp_enqueue_style( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $media:string )
    } 
    if ( ( is_page( array( 7501,7212,1114,9042,9147,9155,9159,9050,717,7180,7157,7921,7923,4336,8540,9521,9523,10175) ) ) ){

        wp_enqueue_style( 'zoho_form_nonapi-v2', get_stylesheet_directory_uri() . '/css/zoho_form_nonapi.css');
    } 
    wp_enqueue_style( 'override-style', get_stylesheet_directory_uri() .'/overrides/override.css', [], time(), 'all' );
    wp_enqueue_script('override-js', get_stylesheet_directory_uri() . '/overrides/override.js', array('jquery'), null, true);
}
    

	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' , 15);

    function register_foundation_style() {
        if ( is_page_template( 'template-corporate.php' ) ) {
            wp_enqueue_style( 'corporate-css', get_stylesheet_directory_uri() . '/css/corporate.css' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'register_foundation_style' , 20);

    function frontpage_enqueue_styles(){
        if( is_front_page() ){
           wp_dequeue_style( 'wp-block-library' );
           wp_dequeue_style( 'wp-block-library-theme' );
           wp_dequeue_style( 'odometer' );
           wp_dequeue_style( 'pages_mobile' );
           wp_dequeue_style( 'datepicker' );
           wp_dequeue_style( 'addtoany' );
           wp_deregister_script( 'odometer-js' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'frontpage_enqueue_styles' , 20);


    add_action( 'admin_enqueue_scripts', 'load_admin_style' );
        function load_admin_style() {
            wp_enqueue_style( 'admin_css', get_stylesheet_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
            wp_enqueue_script( 'admin_js', get_stylesheet_directory_uri() . '/dist/admin.js', array(), '1', true);
     
       }
//=============== AFTER THEME SETUP ===============//
	if (!function_exists( 'sytian_setup' ) ) {
		function sytian_setup() { 
		// wp_deregister_script( 'jquery' );

		/* MENU */
        register_nav_menu('top-menu', __('Top Navigation', 'sytian'));
        register_nav_menu('primary', __('Primary Navigation', 'sytian'));
        register_nav_menu('footer-menu-1', __('Footer Navigation 1', 'sytian'));
        register_nav_menu('footer-menu-2', __('Footer Navigation 2', 'sytian'));
        register_nav_menu('footer-menu-3', __('Footer Navigation 3', 'sytian'));
        register_nav_menu('footer-menu-4', __('Footer Navigation 4', 'sytian'));
        register_nav_menu('bottom-footer', __('Footer Bottom Navigation', 'sytian'));
        register_nav_menu('new-top-menu-left', __('2019 Top Navigation (left)', 'sytian'));
        register_nav_menu('new-top-menu-right', __('2019 Top Navigation (right)', 'sytian'));
        register_nav_menu('new-primary', __('2019 Primary Navigation', 'sytian'));
        register_nav_menu('corp-new-top-menu-right', __('Corporate Top Navigation (right)', 'sytian'));
        register_nav_menu('corpnew-primary', __('Corporate Primary Navigation', 'sytian'));
        register_nav_menu('corporate2021', __('2021 Corporate Navigation', 'sytian'));
        register_nav_menu('top-bar', __('Topbar', 'sytian'));


		/* THEME SUPPORTS */
		add_theme_support( 'post-thumbnails' );
            if ( function_exists( 'add_theme_support' ) ) { 
                add_image_size( 'custom', 650, 152, true );
                add_image_size( 'corporate', 450, 450, true ); // (cropped)
            }

		/* WIDGETS SECTION */
		register_sidebar( array(
			'name'          => __( 'Left Sidebar', 'redrock' ),
			'id'            => 'sidebar-default-left',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'          => __( 'Right Sidebar', 'redrock' ),
			'id'            => 'sidebar-default-right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
		}
	}
	add_action('after_setup_theme', 'sytian_setup');

// ====== ADD SHORTCODE IN WIDGETS
	add_filter('widget_text','do_shortcode');


// ====== ADD EXCERPTS TO PAGES
	add_action( 'init', 'my_add_excerpts_to_pages' );
	function my_add_excerpts_to_pages() {
  	add_post_type_support( 'page', 'excerpt' );
	}

// ====== REMOVE DEFAULT IN ADMIN MENU POSTS ( NOT REQUIRED )
// function my_remove_sub_menus() {
//   remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
//   remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
// }
// add_action('admin_menu', 'my_remove_sub_menus');

// // ====== REMOVE PLUGIN UPDATES
// 	add_action('after_setup_theme','remove_core_updates');
// 	function remove_core_updates()
// 	{
// 	if(! current_user_can('update_core')){return;}
// 	add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
// 	add_filter('pre_option_update_core','__return_null');
// 	add_filter('pre_site_transient_update_core','__return_null');
// 	}

// 	remove_action('load-update-core.php','wp_update_plugins');
// 	add_filter('pre_site_transient_update_plugins','__return_null');

// // ====== REMOVE S.W.ORG BROKEN LINK 
	function remove_dns_prefetch( $hints, $relation_type ) {
	    if ( 'dns-prefetch' === $relation_type ) {
	        return array_diff( wp_dependencies_unique_hosts(), $hints );
	    }

	    return $hints;
	}
	add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

// // ====== REMOVE TAGS and CATEGORY
// 	function my_remove_sub_menus() {
// 	  remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
// 	  remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
// 	}

function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery-3.5.1.min.js' ) ) return $url;
    if ( is_admin() )  return $url;
    return "$url' defer ";
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

//add_action('admin_menu', 'my_remove_sub_menus');
function remove_menu() 
{
   remove_menu_page('edit.php');
   remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'remove_menu');

function adjust_the_wp_menu() {
    $page = remove_submenu_page( 'index.php', 'my-sites.php' );
}
 add_action( 'admin_menu', 'adjust_the_wp_menu', 999 );

function empty_content($str) {
    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
}


function my_post_queries( $query ) {
    // not an admin page and it is the main query
    if (!is_admin() && $query->is_main_query()){

        if ( is_post_type_archive('moving-news') ){
            // show 30 posts on custom taxonomy pages
            $query->set('posts_per_page', 12);
        }
    }
}
add_action( 'pre_get_posts', 'my_post_queries' );


function wp_bs_pagination($pages = '', $range = 1)
{  
     $showitems = ($range * 2) + 1;  
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
         global $wp_query; 
     $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
        echo '<div class="text-center">'; 
            echo '<nav><ul class="pagination">';
            echo "<li class='page-nav'><a title='First' href='".get_pagenum_link(1)."' aria-label='First' ".($paged == 1 ? "class='disabled'" : "")."><span class='hidden-xs'> &#10094;&#10094; </span></a></li>";
            echo "<li class='page-nav'><a title='Previous' href='".get_pagenum_link($paged - 1)."' aria-label='Previous' ".($paged == 1 ? "class='disabled'" : "")."><span class='hidden-xs'> &#10094; </span></a></li>";
                for ($i=1; $i <= $pages; $i++) {
                    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                        echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
                    }
                }
                echo "<li class='page-nav'><a title='Next' href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next' ".($paged == $pages ? "class='disabled'" : "")."><span class='hidden-xs'> &#10095; </span></a></li>";
                echo "<li class='page-nav'><a title='Last' href=\"".get_pagenum_link($pages)."\"  aria-label='Last' ".($paged == $pages ? "class='disabled'" : "")."><span class='hidden-xs'> &#10095;&#10095; </span></a></li>";
            echo "</ul></nav>";
        echo "</div>";
     }
}

//add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    if ( ( $args->theme_location == 'top-menu' ) || ( $args->theme_location == 'new-top-menu-right' ) ) {
        //$flag = qtrans_getLanguage();
        //$record = geoip_detect2_get_info_from_ip( geoip_detect2_get_client_ip(), NULL );
        $country = get_country();
         
		$phone = '+44 800 808 5677';
		$email = 'london@santaferelo.com';
		$page = get_post_type_archive_link( 'offices' );
        foreach( get_field('country_items') as $item ):
            if( $country == $item['country'] ):
                $phone = $item['phone_number'];
                $email = $item['email'];
                $page = $item['office_page'];
                $corporate_number = $item['corporate_number'];
                if( $page ):
                    $phone = get_field('general_enquires', url_to_postid( $page ) );
                endif;
            endif;
        endforeach;
					$sphone = preg_replace('/\s+/', '', $phone);
					$sphone = preg_replace('/\(|\)/', '', $sphone);
					// echo '<span><a href="tel:'.$sphone.'"><i class="fa fa-phone" aria-hidden="true"></i>Call <i class="number-display">'.$phone.'</i></a></span>';
					// echo '<span><a href="mailto:'.$email.'"><i class="fa fa-envelope" aria-hidden="true"></i>Email</a></span>';
        $newitems = '<li class="menu-item phone"><a href="tel:'.$phone.'">Personal: '.$phone.'</a></li>';
        $newitems .= '<li class="menu-item email"><a href="mailto:'.$email.'">Email</a></li>';

        

    }
    return $newitems.$items;
}



add_filter( 'wp_nav_menu_topbar_items', 'prefix_add_menu_item', 11, 2 );
/**
 * Add Menu Item to end of menu
 */
function prefix_add_menu_item ( $items, $args ) {
  
    //    $start_menu_item =  '<li class="menu-item">...</li>';
        // $record = geoip_detect2_get_info_from_ip( geoip_detect2_get_client_ip(), NULL );
        $country = get_country();
		$phone = '+44 800 808 5677';
		$email = 'london@santaferelo.com';
		$page = get_post_type_archive_link( 'offices' );
        $countries = get_field('country_items','option');
        foreach(  $countries as $item ):
            if( $country == $item['country'] ):
                $phone = $item['phone_number'];
                $corporate_phone = $item['corporate_phone_number'];
                $email = $item['email'];
                $page = $item['office_page'];
            endif;
        endforeach;
					$sphone = preg_replace('/\s+/', '', $phone);
					$sphone = preg_replace('/\(|\)/', '', $sphone);

                    $sphone_corp = preg_replace('/\s+/', '', $corporate_phone);
					$sphone_corp = preg_replace('/\(|\)/', '', $sphone_corp);
                
					// echo '<span><a href="tel:'.$sphone.'"><i class="fa fa-phone" aria-hidden="true"></i>Call <i class="number-display">'.$phone.'</i></a></span>';
					// echo '<span><a href="mailto:'.$email.'"><i class="fa fa-envelope" aria-hidden="true"></i>Email</a></span>';
        $newitems='';

        if(!empty($corporate_phone)) $newitems = '<li class="menu-item phone"><a href="tel:'. $sphone_corp.'">Corporate: '.$corporate_phone.'</a></li>';

        $newitems .= '<li class="menu-item phone"><a href="tel:'.$sphone.'">Personal: '.$phone.'</a></li>';
        // $newitems .= '<li class="menu-item phone"><a href="tel:'.$sphone.'">Call: '.$phone.'</a></li>';
        $newitems .= '<li class="menu-item email"><a href="mailto:'.$email.'">Email</a></li>';

      

       return $newitems . $items;
}

function get_corporate_phone()
{
    
    // $record = geoip_detect2_get_info_from_ip( geoip_detect2_get_client_ip(), NULL );
    $continent = function_exists('geot_continent_code') ? geot_continent_code() : 'EU';
    $corporate_phone = '+44 (0)208 961 4141';
		
        switch ( $continent) :
            case 'AF':
                $consumer_phone = '+852 2574 6204';
                break;
            case 'AS':
                $consumer_phone = '+852 2574 6204';
                break;
            case 'EU':
                $consumer_phone = '+44 800 058 4504';
                break;
            case 'SA':
                $consumer_phone = '+1 (833) 6290929';
                break;
        endswitch;

        $phone = '+44 800 808 5677';
		$email = 'london@santaferelo.com';
		$page = get_post_type_archive_link( 'offices' );
        $countries = get_field('country_items','option');
       
        foreach(  $countries as $item ):
            if( get_country() == $item['country'] ):
                $phone = $item['phone_number'];
                $corporate_phone = $item['corporate_phone_number'];
                $consumer_phone = !empty($item['sanelo_number']) ? $item['sanelo_number'] : $consumer_phone;
                $email = $item['email'];
                $page = $item['office_page'];
            endif;
        endforeach;
        // $sphone = preg_replace('/\s+/', '', $phone);
        // $sphone = preg_replace('/\(|\)/', '', $sphone);
      
        $sphone_corp = preg_replace('/\s+/', '', $corporate_phone);
        $sphone_corp = preg_replace('/\(|\)/', '', $sphone_corp);

        $sphone_cons = preg_replace('/\s+/', '', $consumer_phone);
        $sphone_cons = preg_replace('/\(|\)/', '', $sphone_cons);

        // if (!empty($corporate_phone)) 
        // return '<li class="menu-item phone"><a href="tel:'. $sphone_corp.'">Call: '.$corporate_phone.'</a></li>';

        if(!empty($corporate_phone) && !empty($consumer_phone)){
            if(!empty($consumer_phone)){
                if( $consumer_phone == $corporate_phone){
                    return '<li class="menu-item phone"><a href="tel:'. $sphone_corp.'">Call: '.$corporate_phone.'</a></li>';
                } else {
                    return '<li class="menu-item phone hide-on-mobile">
                    <a href="tel:'. $sphone_corp.'">Corporate: '.$corporate_phone.'</a>'.
                    '<a href="tel:'. $sphone_cons.'">Consumer: '.$consumer_phone.'</a>'.
                    '</li>';
                }
            }
            else{
                return '<li class="menu-item phone"><a href="tel:'. $sphone_corp.'">Call: '.$corporate_phone.'</a></li>';
            }

        }
        else{
            return '';

        }
}

//add_filter( 'wp_nav_menu_items', 'sidepanel_menu', 10, 2 );
function sidepanel_menu ( $items, $args ) {
    if ($args->theme_location == 'primary') {
        // $flag = qtrans_getLanguage();
        $items .= '<li class="menu-item flag" id="menu-flag"><a href="#modal-country" uk-toggle>GB<i class="material-icons">language</i></a></li>';
    }
    return $items;
}


/**
 * Remove one or more icon types
 *
 * Uncomment one or more line to remove icon types
 *
 * @param  array $types Registered icon types.
 * @return array
 */
function my_remove_menu_icons_type( $types ) {
    // Dashicons
    unset( $types['dashicons'] );

    // Elusive
    unset( $types['elusive'] );

    // Font Awesome
    // unset( $types['fa'] );

    // Foundation
    unset( $types['foundation-icons'] );

    // Genericons
    unset( $types['genericon'] );

    // Image
    // unset( $types['image'] );

    return $types;
}
add_filter( 'menu_icons_types', 'my_remove_menu_icons_type' );


//add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {

    global $user_ID;

    if ( current_user_can( 'upload_plugins' ) ) {
    }else{
        remove_menu_page('theme-settings');
        remove_menu_page( 'tools.php' ); 
        remove_menu_page( 'my-sites.php' ); 
    }
}

add_action( 'admin_bar_menu', 'remove_wp_my_site', 999 );
function remove_wp_my_site( $wp_admin_bar ) {
    global $user_ID;

    if ( current_user_can( 'upload_plugins' ) ) {
    }else{
        $wp_admin_bar->remove_node('my-sites');
    }
}

function my_format_TinyMCE( $in ) {
    global $user_ID;
    if ( current_user_can( 'upload_plugins' ) ) {
    }else{
        $in['menubar'] = false;
        $in['toolbar2'] = false;
        $in['toolbar3'] = false;
        $in['toolbar4'] = false;
    }
    return $in;
}
//add_filter( 'tiny_mce_before_init', 'my_format_TinyMCE' );

function my_editor_settings($settings) {
    global $user_ID;

    if ( current_user_can( 'upload_plugins' ) ) {
    }else{
        $settings['quicktags'] = false;
        // $settings['media_buttons'] = false;
    }
    return $settings;
}

add_filter('wp_editor_settings', 'my_editor_settings');


add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
function my_toolbars( $toolbars )
{
    global $user_ID;
    if ( current_user_can( 'upload_plugins' ) ) {
    }else{
        //unset( $toolbars['Full' ][2] ); for acf wysiwyg editor toolbar restritction . disabled 1/6/2020 
        //unset( $toolbars['Full' ][3] ); 
    }
    return $toolbars;
}

add_filter('acf/fields/post_object/query/key=field_5b211f1261d8c', 'my_relationship_query', 10, 3);
function my_relationship_query( $args, $field, $post_id )
{
    $args['meta_query'] = array(
        'relation' => 'AND',
        array(
            'key' => '_wp_page_template',
            'value' => 'template-tfa.php',
            'compare' => '='
        )
    );
    return $args;
}

add_filter('acf/fields/post_object/query/key=field_5ba24028a98f8', 'webinar_query', 10, 3);
add_filter('acf/fields/post_object/query/key=field_5ba24093a98f9', 'webinar_query', 10, 3);
add_filter('acf/fields/post_object/query/key=field_5ba240b4a98fa', 'webinar_query', 10, 3);
add_filter('acf/fields/post_object/query/key=field_5ba265cec3c8f', 'webinar_query', 10, 3);
add_filter('acf/fields/post_object/query/key=field_5ba2660cc3c91', 'webinar_query', 10, 3);

function childonly_query( $args, $field, $post_id )
{
    $args['post_parent__not_in'] = array(0);
    return $args;
}

function webinar_query( $args, $field, $post_id )
{
     $args['post_parent'] = 0;
    return $args;
}


add_action( 'admin_menu', 'linked_url' );
function linked_url() {
	$user = wp_get_current_user();
	$allowed_roles = array('global_editor', 'administrator', 'publisher');
	if( array_intersect($allowed_roles, $user->roles ) ) {
    	add_menu_page( 'linked_url', 'Forms', 'read', 'http://www.example.com', '', 'dashicons-list-view', 40);
    }
}


add_action( 'admin_menu', 'linked_url2' );
function linked_url2() {
	$user = wp_get_current_user();
	$allowed_roles = array('global_editor', 'administrator', 'publisher');
	if( array_intersect($allowed_roles, $user->roles ) ) {
    	add_menu_page( 'linked_url', 'Corporate Relocation', 'read', get_home_url().'/wp-admin/edit.php?s&post_status=all&post_type=page&action=-1&m=0&page_template_filter=template-version2.php', '', 'dashicons-building', 30);
    }
}

add_action( 'admin_menu', 'linked_url3' );
function linked_url3() {
	$user = wp_get_current_user();
	$allowed_roles = array('global_editor', 'administrator', 'publisher');
	if( array_intersect($allowed_roles, $user->roles ) ) {
    	add_menu_page( 'linked_url', 'Commercial services', 'read', get_home_url().'/wp-admin/edit.php?s&post_status=all&post_type=page&action=-1&m=0&page_template_filter=template-commercial-services.php', '', '
dashicons-awards', 32);
    }
}

add_action( 'admin_menu' , 'linkedurl_function' );
function linkedurl_function() {
	$user = wp_get_current_user();
	$allowed_roles = array('global_editor', 'administrator', 'publisher');
	if( array_intersect($allowed_roles, $user->roles ) ) {
	    global $menu;
	    $menu[40][2] = get_home_url().'/wp-admin/edit.php?s&post_status=all&post_type=page&action=-1&m=0&page_template_filter=template-tfa.php';
	}
}

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    
//popular post custom field
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//Testimonial words limit
function myTruncate2($string, $limit, $break=" ", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  $string = substr($string, 0, $limit);
  if(false !== ($breakpoint = strrpos($string, $break))) {
    $string = substr($string, 0, $breakpoint);
  }

  return $string . $pad;
}



//display view count
function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

//allow span 

function override_mce_options($initArray) 
{
  $opts = '*[*]';
  $initArray['valid_elements'] = $opts;
  $initArray['extended_valid_elements'] = $opts;
  return $initArray;
 }
 add_filter('tiny_mce_before_init', 'override_mce_options'); 


function is_grandchild_page() {
    global $post;
     if ( (count(get_post_ancestors($post->ID)) >= 2) ) {
        return true;
     }
}

/**
 * my_terms_clauses
 *
 * filter the terms clauses
 *
 * @param $clauses array
 * @param $taxonomy string
 * @param $args array
 * @return array
 * @link http://wordpress.stackexchange.com/a/183200/45728
 **/
function my_terms_clauses( $clauses, $taxonomy, $args ) {
  global $wpdb;

  if ( $args['post_types'] ) {
    $post_types = $args['post_types'];

    // allow for arrays
    if ( is_array($args['post_types']) ) {
      $post_types = implode("','", $args['post_types']);
    }
    $clauses['join'] .= " INNER JOIN $wpdb->term_relationships AS r ON r.term_taxonomy_id = tt.term_taxonomy_id INNER JOIN $wpdb->posts AS p ON p.ID = r.object_id";
    $clauses['where'] .= " AND p.post_type IN ('". esc_sql( $post_types ). "') GROUP BY t.term_id";
  }
  return $clauses;
}
add_filter('terms_clauses', 'my_terms_clauses', 99999, 3);

// remove_filter('template_redirect', 'redirect_canonical'); 

function my_acf_init() {
    
    acf_update_setting('google_api_key', 'AIzaSyC9GgkTRZwHEjUTWEfflsnDB6c_qqe2SIE');
}

add_action('acf/init', 'my_acf_init');

function wpa66834_role_admin_body_class( $classes ) {
    global $current_user;
    foreach( $current_user->roles as $role )
        $classes .= ' role-' . $role;
    return trim( $classes );
}
add_filter( 'admin_body_class', 'wpa66834_role_admin_body_class' );

add_action('admin_menu', 'remove_built_in_roles');
function remove_built_in_roles() {
    global $wp_roles;
 
    $roles_to_remove = array('subscriber', 'contributor', 'author', 'editor');
 
    foreach ($roles_to_remove as $role) {
        if (isset($wp_roles->roles[$role])) {
            $wp_roles->remove_role($role);
        }
    }
}





function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Leadership Module// Leadership Module// Leadership Module// Leadership Module// Leadership Module
function my_post_object_query( $args, $field, $post_id ) {
    
    // only show children of the current post being edited
    $args['post_parent'] = $post_id;
    
    
    // return
    return $args; 
}
add_filter('acf/fields/relationship/query/key=field_5df8cc16e2486', 'my_post_object_query', 10, 3);
/////////////


function new_post_object_query( $args, $field, $post_id ) {
    
    // only show children of the current post being edited
    //$args['post_parent'] = 9340;
    $args['post_parent'] = $post_id;
    
    // return
    return $args; 
}
add_filter('acf/fields/relationship/query/key=field_605437c7979d7', 'new_post_object_query', 10, 3);

function tg_enable_strict_transport_security_hsts_header_wordpress() {
    header( 'Strict-Transport-Security: max-age=63072000; includeSubDomains; preload' );
}
add_action( 'send_headers', 'tg_enable_strict_transport_security_hsts_header_wordpress' );


function prefix_reset_metabox_positions(){
  delete_user_meta( 17, 'meta-box-order_page' );
}
add_action( 'admin_init', 'prefix_reset_metabox_positions' );

add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
    return 60 * 60 * 24 * 30; // 5 days
}

//trustpilot shortcode

function trustpilot_function() {
     return '<!-- TrustBox widget - Mini --><div class="trustpilot-wcontainer"> <div class="trustpilot-widget uk-align-left" data-locale="en-GB" data-template-id="53aa8807dec7e10d38f59f32" data-businessunit-id="502a29130000640005198720" data-style-height="150px" data-style-width="100%" data-theme="light"> <a href="https://uk.trustpilot.com/review/santaferelo.com" target="_blank" rel="noopener">Trustpilot</a> </div></div> <!-- End TrustBox widget -->';
}
add_shortcode('trustpilot', 'trustpilot_function');

//check if child of parent post ID
function is_child_of( $id ) {
  return ( is_page() && $id === get_post()->post_parent );
}

// add_action( 'template_redirect', 'redirect_post_type_single' );
// function redirect_post_type_single(){
//     if ( ! is_singular( 'offices' ) )
//         return;
//     if(get_the_ID()!=1328)
//         return;
//     wp_redirect( get_post_type_archive_link( 'offices' ), 301 );
//     exit;
// }

$style_dir = get_stylesheet_directory();

// Configuration files
// --------------------------------
foreach (glob($style_dir . '/library/*.php') as $file) {
  require_once($file);
}
add_filter('wp_head',function(){
    ?>
    <script>
        document.addEventListener("DOMContentLoaded",function(){
            const target = document.querySelector('body').offsetTop;
            window.onscroll = function() {checkScroll()};
           
            function checkScroll(){
                if(document.body.scrollTop > target || document.documentElement.scrollTop > target){
                    document.body.classList.add("fixed-nav")
                    
                    
                }else{
                    document.body.classList.remove("fixed-nav")
                  

                }

            }
        })
      

    </script>
    <?php
});

// if(have_rows('field_6203f6965950d')){
//     while(have_rows('field_6203f6965950d')): the_row();
//     delete_row('field_6203f6965950d',1);
//     endwhile;
// };

// if($countries=get_field('field_5e83266b3dcbe',7422)){
//     $x = 1;
//     foreach($countries as $c){
//         if($x>42){
//             delete_row('field_5e83266b3dcbe',$x,7422);
//         //print_r($c);
//         //die;
//         }
//         $x++;
//     }
// };



add_filter('acf/load_value/key=field_6203f6965950d',function($value,$post_id,$field)
{
    
    if(!empty($value)){
        return $value;
    }

  

    if($ip_countries=get_field('field_5e83266b3dcbe',7422)){
        foreach($ip_countries as $c){
            $countries[] = $c;
        }
    }

    ksort($countries); $country = array_column($countries, 'country');
    array_multisort($country, SORT_ASC, $countries);
        
    $new_value=array();
    foreach($countries as $key => $value){
        array_push($new_value,array(
            'field_6203f6d15950e' => $value['country'],
            'field_6203f6f95950f' => $value['phone_number'],
            'field_6203f70959510' => $value['wechat'],
            'field_6203f71a59511' => $value['email'],
            'field_6203f72159512' => $value['office_page'],
        ));
    }
    return $new_value;
},12,3);

include_once('tax/job-cat.php');

add_action( 'wpcf7_before_send_mail', 'wpcf7_change_recipient' );
 
function wpcf7_change_recipient($contact_form){
 
	$submission = WPCF7_Submission::get_instance();
  
    $posted_data = $submission->get_posted_data();
    $cID = $posted_data['career_id'];
    $cover_msg = $posted_data['txtCover_letter'];
	$recipient = get_field('email',$cID);
    $subject = 'Application for '.get_the_title($cID);
    $message = "Cover letter: ". $posted_data['txtCover_letter'] .'<br>';
  
    if($recipient) {
      
		$mail = $contact_form->prop( 'mail' );
        
        $mail['subject'] = $subject;
		$mail['recipient'] = $recipient;
        
		$contact_form->set_properties(array('mail'=>$mail));

	}
   
 
}

function unique_multidim_array($array, $key) {
    $temp_array = array();
    $i = 0;
    $key_array = array();
   
    foreach($array as $val) {
        if (!in_array($val[$key], $key_array)) {
            $key_array[$i] = $val[$key];
            $temp_array[$i] = $val;
        }
        $i++;
    }
    return $temp_array;
}

add_shortcode('get_career_title' , function($atts){
    // $attributes = shortcode_atts( array(
    //     'title'' => 'false,
    //     'limit'' => '4,
    // ), $atts );
     $title = (isset($_GET['cID']) && !empty($_GET['cID'])) ? get_the_title($_GET['cID']):'';
    ob_start();
 
        echo $title;
 
    return ob_get_clean();
} );


if( '/en/moving-form-version-3/'==$_SERVER['REQUEST_URI']): 
    header("Location: https://www.santaferelo.com/en/moving-form-version-4/", true, 301);
    exit();
endif;

function country_name($key){
$countries = [
    'AF' => 'Afghanistan',
    'AX' => 'Åland Islands',
    'AL' => 'Albania',
    'DZ' => 'Algeria',
    'AS' => 'American Samoa',
    'AD' => 'Andorra',
    'AO' => 'Angola',
    'AI' => 'Anguilla',
    'AQ' => 'Antarctica',
    'AG' => 'Antigua & Barbuda',
    'AR' => 'Argentina',
    'AM' => 'Armenia',
    'AW' => 'Aruba',
    'AC' => 'Ascension Island',
    'AU' => 'Australia',
    'AT' => 'Austria',
    'AZ' => 'Azerbaijan',
    'BS' => 'Bahamas',
    'BH' => 'Bahrain',
    'BD' => 'Bangladesh',
    'BB' => 'Barbados',
    'BY' => 'Belarus',
    'BE' => 'Belgium',
    'BZ' => 'Belize',
    'BJ' => 'Benin',
    'BM' => 'Bermuda',
    'BT' => 'Bhutan',
    'BO' => 'Bolivia',
    'BA' => 'Bosnia & Herzegovina',
    'BW' => 'Botswana',
    'BR' => 'Brazil',
    'IO' => 'British Indian Ocean Territory',
    'VG' => 'British Virgin Islands',
    'BN' => 'Brunei',
    'BG' => 'Bulgaria',
    'BF' => 'Burkina Faso',
    'BI' => 'Burundi',
    'KH' => 'Cambodia',
    'CM' => 'Cameroon',
    'CA' => 'Canada',
    'IC' => 'Canary Islands',
    'CV' => 'Cape Verde',
    'BQ' => 'Caribbean Netherlands',
    'KY' => 'Cayman Islands',
    'CF' => 'Central African Republic',
    'EA' => 'Ceuta & Melilla',
    'TD' => 'Chad',
    'CL' => 'Chile',
    'CN' => 'China',
    'CX' => 'Christmas Island',
    'CC' => 'Cocos (Keeling) Islands',
    'CO' => 'Colombia',
    'KM' => 'Comoros',
    'CG' => 'Congo - Brazzaville',
    'CD' => 'Congo - Kinshasa',
    'CK' => 'Cook Islands',
    'CR' => 'Costa Rica',
    'CI' => 'Côte d’Ivoire',
    'HR' => 'Croatia',
    'CU' => 'Cuba',
    'CW' => 'Curaçao',
    'CY' => 'Cyprus',
    'CZ' => 'Czechia',
    'DK' => 'Denmark',
    'DG' => 'Diego Garcia',
    'DJ' => 'Djibouti',
    'DM' => 'Dominica',
    'DO' => 'Dominican Republic',
    'EC' => 'Ecuador',
    'EG' => 'Egypt',
    'SV' => 'El Salvador',
    'GQ' => 'Equatorial Guinea',
    'ER' => 'Eritrea',
    'EE' => 'Estonia',
    'ET' => 'Ethiopia',
    'EZ' => 'Eurozone',
    'FK' => 'Falkland Islands',
    'FO' => 'Faroe Islands',
    'FJ' => 'Fiji',
    'FI' => 'Finland',
    'FR' => 'France',
    'GF' => 'French Guiana',
    'PF' => 'French Polynesia',
    'TF' => 'French Southern Territories',
    'GA' => 'Gabon',
    'GM' => 'Gambia',
    'GE' => 'Georgia',
    'DE' => 'Germany',
    'GH' => 'Ghana',
    'GI' => 'Gibraltar',
    'GR' => 'Greece',
    'GL' => 'Greenland',
    'GD' => 'Grenada',
    'GP' => 'Guadeloupe',
    'GU' => 'Guam',
    'GT' => 'Guatemala',
    'GG' => 'Guernsey',
    'GN' => 'Guinea',
    'GW' => 'Guinea-Bissau',
    'GY' => 'Guyana',
    'HT' => 'Haiti',
    'HN' => 'Honduras',
    'HK' => 'Hong Kong SAR China',
    'HU' => 'Hungary',
    'IS' => 'Iceland',
    'IN' => 'India',
    'ID' => 'Indonesia',
    'IR' => 'Iran',
    'IQ' => 'Iraq',
    'IE' => 'Ireland',
    'IM' => 'Isle of Man',
    'IL' => 'Israel',
    'IT' => 'Italy',
    'JM' => 'Jamaica',
    'JP' => 'Japan',
    'JE' => 'Jersey',
    'JO' => 'Jordan',
    'KZ' => 'Kazakhstan',
    'KE' => 'Kenya',
    'KI' => 'Kiribati',
    'XK' => 'Kosovo',
    'KW' => 'Kuwait',
    'KG' => 'Kyrgyzstan',
    'LA' => 'Laos',
    'LV' => 'Latvia',
    'LB' => 'Lebanon',
    'LS' => 'Lesotho',
    'LR' => 'Liberia',
    'LY' => 'Libya',
    'LI' => 'Liechtenstein',
    'LT' => 'Lithuania',
    'LU' => 'Luxembourg',
    'MO' => 'Macau SAR China',
    'MK' => 'Macedonia',
    'MG' => 'Madagascar',
    'MW' => 'Malawi',
    'MY' => 'Malaysia',
    'MV' => 'Maldives',
    'ML' => 'Mali',
    'MT' => 'Malta',
    'MH' => 'Marshall Islands',
    'MQ' => 'Martinique',
    'MR' => 'Mauritania',
    'MU' => 'Mauritius',
    'YT' => 'Mayotte',
    'MX' => 'Mexico',
    'FM' => 'Micronesia',
    'MD' => 'Moldova',
    'MC' => 'Monaco',
    'MN' => 'Mongolia',
    'ME' => 'Montenegro',
    'MS' => 'Montserrat',
    'MA' => 'Morocco',
    'MZ' => 'Mozambique',
    'MM' => 'Myanmar (Burma)',
    'NA' => 'Namibia',
    'NR' => 'Nauru',
    'NP' => 'Nepal',
    'NL' => 'Netherlands',
    'NC' => 'New Caledonia',
    'NZ' => 'New Zealand',
    'NI' => 'Nicaragua',
    'NE' => 'Niger',
    'NG' => 'Nigeria',
    'NU' => 'Niue',
    'NF' => 'Norfolk Island',
    'KP' => 'North Korea',
    'MP' => 'Northern Mariana Islands',
    'NO' => 'Norway',
    'OM' => 'Oman',
    'PK' => 'Pakistan',
    'PW' => 'Palau',
    'PS' => 'Palestinian Territories',
    'PA' => 'Panama',
    'PG' => 'Papua New Guinea',
    'PY' => 'Paraguay',
    'PE' => 'Peru',
    'PH' => 'Philippines',
    'PN' => 'Pitcairn Islands',
    'PL' => 'Poland',
    'PT' => 'Portugal',
    'PR' => 'Puerto Rico',
    'QA' => 'Qatar',
    'RE' => 'Réunion',
    'RO' => 'Romania',
    'RU' => 'Russia',
    'RW' => 'Rwanda',
    'WS' => 'Samoa',
    'SM' => 'San Marino',
    'ST' => 'São Tomé & Príncipe',
    'SA' => 'Saudi Arabia',
    'SN' => 'Senegal',
    'RS' => 'Serbia',
    'SC' => 'Seychelles',
    'SL' => 'Sierra Leone',
    'SG' => 'Singapore',
    'SX' => 'Sint Maarten',
    'SK' => 'Slovakia',
    'SI' => 'Slovenia',
    'SB' => 'Solomon Islands',
    'SO' => 'Somalia',
    'ZA' => 'South Africa',
    'GS' => 'South Georgia & South Sandwich Islands',
    'KR' => 'South Korea',
    'SS' => 'South Sudan',
    'ES' => 'Spain',
    'LK' => 'Sri Lanka',
    'BL' => 'St. Barthélemy',
    'SH' => 'St. Helena',
    'KN' => 'St. Kitts & Nevis',
    'LC' => 'St. Lucia',
    'MF' => 'St. Martin',
    'PM' => 'St. Pierre & Miquelon',
    'VC' => 'St. Vincent & Grenadines',
    'SD' => 'Sudan',
    'SR' => 'Suriname',
    'SJ' => 'Svalbard & Jan Mayen',
    'SZ' => 'Swaziland',
    'SE' => 'Sweden',
    'CH' => 'Switzerland',
    'SY' => 'Syria',
    'TW' => 'Taiwan',
    'TJ' => 'Tajikistan',
    'TZ' => 'Tanzania',
    'TH' => 'Thailand',
    'TL' => 'Timor-Leste',
    'TG' => 'Togo',
    'TK' => 'Tokelau',
    'TO' => 'Tonga',
    'TT' => 'Trinidad & Tobago',
    'TA' => 'Tristan da Cunha',
    'TN' => 'Tunisia',
    'TR' => 'Turkey',
    'TM' => 'Turkmenistan',
    'TC' => 'Turks & Caicos Islands',
    'TV' => 'Tuvalu',
    'UM' => 'U.S. Outlying Islands',
    'VI' => 'U.S. Virgin Islands',
    'UG' => 'Uganda',
    'UA' => 'Ukraine',
    'AE' => 'United Arab Emirates',
    'GB' => 'United Kingdom',
    'UN' => 'United Nations',
    'US' => 'United States',
    'UY' => 'Uruguay',
    'UZ' => 'Uzbekistan',
    'VU' => 'Vanuatu',
    'VA' => 'Vatican City',
    'VE' => 'Venezuela',
    'VN' => 'Vietnam',
    'WF' => 'Wallis & Futuna',
    'EH' => 'Western Sahara',
    'YE' => 'Yemen',
    'ZM' => 'Zambia',
    'ZW' => 'Zimbabwe',
];
return $countries[$key];
}

// Register Custom Post Type
function create_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Blogs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Blogs', 'text_domain' ),
		'name_admin_bar'        => __( 'Blogs', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
    $rewrite = array(
		'slug' => 'corporate-relocation/resources/blog',
		'with_front' => true,
		'pages' => true,
		'feeds' => false,
	);
	$args = array(
		'label'                 => __( 'Blog', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail','comments' ),
		'taxonomies'            => array( 'blog_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'rewrite'=>$rewrite,

        
	);
	register_post_type( 'blog', $args );
    
    $labels = array(
		'name'                  => _x( 'Surveys', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Survey', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Surveys', 'text_domain' ),
		'name_admin_bar'        => __( 'Surveys', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
    $rewrite = array(
		'slug' => 'corporate-relocation/resources/survey',
		'with_front' => true,
		'pages' => true,
		'feeds' => false,
	);
	$args = array(
		'label'                 => __( 'Surveys', 'text_domain' ),
		'description'           => __( 'Surveys', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail','comments' ),
		'taxonomies'            => '',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'rewrite'=>$rewrite,
	);
	register_post_type( 'survey', $args );

    $labels = array(
		'name'                  => _x( 'Partners', 'Partners Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Partner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Partners', 'text_domain' ),
		'name_admin_bar'        => __( 'Partners', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
    $rewrite = array(
		'slug' => 'corporate-relocation/partners',
		'with_front' => true,
		'pages' => true,
		'feeds' => false,
	);
	$args = array(
		'label'                 => __( 'Partners', 'text_domain' ),
		'description'           => __( 'Partners Custom post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail'),
		'taxonomies'            => '',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'rewrite'=>$rewrite,
	);
	register_post_type( 'partners', $args );

    $labels = array(
		'name'                  => _x( 'Cluster Leaders', 'Cluster Leaders Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Cluster Leader', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Cluster Leaders', 'text_domain' ),
		'name_admin_bar'        => __( 'Cluster Leaders', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
    $rewrite = array(
		'slug' => 'corporate-relocation/cluster-leaders',
		'with_front' => true,
		'pages' => true,
		'feeds' => false,
	);
	$args = array(
		'label'                 => __( 'Cluster Leaders', 'text_domain' ),
		'description'           => __( 'Cluster Leaders Custom post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail','comments' ),
		'taxonomies'            => '',
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'rewrite'=>$rewrite,
	);

	register_post_type( 'cluster-leaders', $args );



}
add_action( 'init', 'create_custom_post_type', 0 );

// Register Custom Taxonomy
function create_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Blog Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Blog Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Blog Categories', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'blog_category', array( 'blog' ), $args );

}
add_action( 'init', 'create_custom_taxonomy', 0 );

function default_comments_on( $data ) {
    if( $data['post_type'] == 'blog' ) {
        $data['comment_status'] = 1;
    }

    return $data;
}
add_filter( 'wp_insert_post_data', 'default_comments_on' );

add_action('wp_ajax_nopriv_get_careers','get_careers');
add_action('wp_ajax_get_careers','get_careers');

function get_careers(){
    
    $array_result = array(
		'data' => 'your data',
		'message' => 'your message'
	);

    $paged = (isset($_POST['current_page'])) ? $_POST['current_page'] : 1;
    $args = [
       'post_type'     =>'career',
       'post_status'   =>'publish',
       'posts_per_page'=> 10,
       'paged'=>$paged,
    ];

    $office_ids =[];
    $job_tax = [];
    $office_tax = [];

    if(isset($_POST['country_id'] ) && $_POST['country_id']!=0 ) {
        $ofc_args = [
            'post_type'=>'offices',
            'post_status'=>'publish',
            'posts_per_page'=>-1,
            'tax_query'=>[
                [
                  'taxonomy'=>'country',
                  'fields'=>'ID',
                  'terms'=> $_POST['country_id'],
                ]
            ],
        ];

        $offices = new WP_Query($ofc_args);
        if($offices->have_posts()):
            while($offices->have_posts()): $offices->the_post();
                array_push($office_ids,get_the_ID());
            endwhile;
            wp_reset_postdata();
        endif;

        $args['meta_query'] = [
            [
              'key' => 'office',
              'value'    => $office_ids,
              'compare'    => 'IN',
            ]
        ];
    }

    if(isset($_POST['job_category']) && $_POST['job_category'] != 0 ) {
        $args['tax_query'] =[
          [
            'taxonomy' => 'job_category',
            'field'    => 'ID',
            'terms'    => $_POST['job_category'],
          ]
        ];
    }
    $pos = new WP_Query($args);
    $result = [];
    $array_result = [];
    if($pos->have_posts()):
        while($pos->have_posts()): $pos->the_post();
            $office = get_field('office');
            array_push($result,[
                'link'=>get_the_permalink(),
                'title'=>get_the_title(),
                'location'=>$office->post_title.', '.country_name($office->country),
                'short_description'=>get_field('short_description'),
                'date'=>get_the_date("j F Y")
        ]);
        endwhile;
        wp_reset_postdata();
    endif;
    $array_result['data'] = $result;
    $array_result['total_pages'] = $pos->max_num_pages;
    wp_send_json($array_result);
    wp_die();
}


// add_filter( 'jwt_auth_whitelist', function ( $endpoints ) {
//     $wp_migrate_db_pro_endpoints = array(
//         '/wp-json/mdb-api/v1/*',
//     );

//     return array_unique( array_merge( $endpoints, $wp_migrate_db_pro_endpoints ) );
// } );

add_action('wp_ajax_nopriv_get_blogs','get_blogs');
add_action('wp_ajax_get_blogs','get_blogs');

function get_blogs() {
    $results = [];
    $return = [];
    $paged = (isset($_POST['current_page'])) ? $_POST['current_page'] : 1;
                    $args = [
                        'post_type'     =>'blog',
                        'post_status'   =>'publish',
                        'posts_per_page'=> 12,
                        'post__not_in'  =>['11250'],
                        'paged'=>$paged,
                      ];
    $blogs = new WP_Query($args);
    if ( $blogs->have_posts() ):
       while( $blogs->have_posts() ) : $blogs->the_post();
       // check for lite_image
       

       
        $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(),'large' ) : 'https://picsum.photos/200/300';
    
       array_push($results,
            [
                'title' => get_the_title(),
                'image' => $thumbnail,
                'lite_image'=> get_field('lite_image'),
                'link'  => get_the_permalink(),
                'date'  => get_the_date("j M Y"),
                'minute'=> get_field('minute_read')
              
            ]
        );
        
      endwhile;
      $return['items'] = $results;
      $return['pages'] = $blogs->max_num_pages;
      wp_reset_postdata();
    endif;
 
    echo json_encode($return);
    wp_die();
}

add_action('wp_ajax_nopriv_get_events','get_events');
add_action('wp_ajax_get_events','get_events');

function get_events() {
    $results = [];
    $return = [];
    $paged = (isset($_POST['current_page'])) ? $_POST['current_page'] : 1;

                    $args = [
                        'post_type'     =>'event',
                        'post_status'   =>'publish',
                        'posts_per_page'=> 12,
                        'paged'=>$paged,
                        'meta_key' => 'event_date',
                        'orderby' => 'meta_value_num',
                        'meta_type' => 'DATE',
                        'order' => 'DESC'
                      ];
                      if(isset($_POST['tax']) && !empty($_POST['tax'])){
                        $args['tax_query'] = [
                            [
                                'taxonomy'=>'event-category',
                                'field'=>'term_id',
                                'terms'=> $_POST['tax']
                            ]
                        ];
                      }
    $blogs = new WP_Query($args);
    if ( $blogs->have_posts() ):
       while( $blogs->have_posts() ) : $blogs->the_post();
    
       
            $thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(),'large' ) : 'https://picsum.photos/1676/1257';
            $date = get_field('event_date') ;
            
            if(get_field('webinar')):
                $date.=' &bullet; Webinar';
            endif;

       array_push($results,
            [
                'title' => get_the_title(),
                'image' => $thumbnail,
                'link'  => get_the_permalink(),
                'text_date'=> get_field('text_date'),
                'date'  => $date,
                'type'=> (strtotime(get_field('event_date')) < time()) ?'past':'upcoming',
                'venue'=> get_field('venue'),
                'time'=> get_field('time')
              
            ]
        );
        
      endwhile;
      $return['items'] = $results;
      $return['pages'] = $blogs->max_num_pages;
      wp_reset_postdata();
    endif;
 
    echo json_encode($return);
    wp_die();
}


add_shortcode('video_intro', function() {

        if($video = get_field('video_intro')) : ob_start() ?>
        <section class="vc-section">
        <div class="embed-container">
            <?php echo $video;?>
        </div>
        </section>
    <?php 
         return ob_get_clean();;
        endif;
} );

add_shortcode('video_embed', function($atts) {
    $a = shortcode_atts( array(
		'class' => '',
	), $atts );

    if($video = get_field('video_embed_2')) : ob_start() ?>
    <section class="vc-section <?=$a['class'];?>"><div class="embed-container"><?php echo $video;?></div></section>
<?php 
     return ob_get_clean();;
    endif;
} );

add_shortcode('event_videos', function($atts) {
  

    if(have_rows('videos')): ob_start()?>
        <div class="video-links">
    <?php         
        while(have_rows('videos')): the_row();?>
            <section class="vc-section">
                <div class="vid-item">
                    <?php if(get_sub_field('title')):?>
                        <div class="title"><?= get_sub_field('title') ;?></div>
                    <?php endif;?>
                    <?php if(get_sub_field('description')):?>
                        <div class="description"><?= get_sub_field('description') ;?></div>
                    <?php endif;?>
                    
                    <?php if(have_rows('videos')):?>
                        <?php while(have_rows('videos')) : the_row();?>
                            

                            <?php if( get_row_layout() == 'embedded' ) : ?>

                                <div class="embed-container">
                                    <?php echo get_sub_field('video');?>
                                </div>

                            <?php endif;?>

                            <?php if( get_row_layout() == 'url' ) : ?>
                              
                                    <a href="<?= get_sub_field('video') ;?>" class="button-secondary video" target='_blank'>Watch video</a>
                            
                            <?php endif;?>
                            
                        <?php endwhile;?>

                        
                    <?php endif;?>
                </div>
            </section>
    <?php        
        endwhile;?>
        </div> 
    <?php   return ob_get_clean();
    endif;
} );




add_shortcode( 'iconize', function($atts, $content = null) 

{
    $a = shortcode_atts( [
        'type' => '',
        'ext'=>'',
    ], $atts );

    switch($a['type']):
            case 'mobile':
            $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-6" style="width:24px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>';
            break;
            case 'phone':
            $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-6" style="width:24px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>';
            break;
            case 'email':
            $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-6" style="width:24px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>';
            break;
        
            case 'address':
            $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" style="width:24px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>';
            break;
    endswitch;

    if($a['type'] == 'phone' || $a['type'] == 'mobile'):
       $content = '<div class="icon-contents phone"><a href="tel:'. preg_replace("/\D/", "", $content). '">'.$content.'</div></a>';
       if($a['ext']):
        $content .= '&nbsp; ext: '.$a['ext'];
       endif;
    endif;
    

    if($a['type'] == 'address'):
        $content = '<div class="icon-contents address">'.$content. '</div>';
    endif;

    if($a['type'] == 'email'):
        $content = '<div class="icon-contents email"><a href="mailto:'.$content.'" title="'.$content.'">'.$content. '</div></a>';
    endif;
    
    return '<div class="local-contact icon ' .$a['type'] .'">'.$icon.' '. preg_replace("/<br\W*?\/?>/", "",$content).'</div>';

} );

// This hook is nowhere in the template files commenting all of it
/*
add_action('add_geo_ip_tag', function(){
    //$geo = geoip_detect2_get_info_from_current_ip();
    $country = get_country();
    $city = function_exists('geot_city')?geot_city():'Londdon';
    // $region = $geo->mostSpecificSubdivision->name;
    $region = function_exists(geot_state()) geot_state() ?:'EU';
    // $postal = $geo->postal->code;
    // $lat = $geo->location->latitude;
    // $long = $geo->location->longitude;
    // $timezone = $geo->location->timeZone;
    // $ip = $geo->traits->ipAddress;
    // $isp = $geo->traits->isp;
    // $org = $geo->traits->organization;
    // $domain = $geo->traits->domain;
    // $as = $geo->traits->autonomousSystemNumber;
    // $as_org = $geo->traits->autonomousSystemOrganization;
    // $netspeed = $geo->traits->networkSpeed;
    // $user_type = $geo->traits->userType;
    // $accuracy = $geo->location->accuracyRadius;
    // $metro = $geo->location->metroCode;
    // $continent = $geo->continent->code;
    // $continent_name = $geo->continent->name;
    // $currency = $geo->country->currency->code;
    // $currency_name = $geo->country->currency->name;
    // $currency_symbol = $geo->country->currency->symbol;
    // $currency_numeric = $geo->country->currency->numericCode;
    // $currency_minor = $geo->country->currency->minorUnits;
    // $currency_iso = $geo->country->currency->isoCode;
    
    echo 'data-region="'.$region.'" data-country="'.$country.'" data-city="'.$city.'"';
});
*/

// Get Estimate Form - CS - 19 Aug 2025 - Start
add_action('wpcf7_before_send_mail', 'cf7_post_to_external_url_before_send', 15, 3);
function cf7_post_to_external_url_before_send($contact_form, $abort, $submission) {
    if ($contact_form->id() !== 13994) {
        return;
    }
	
	$host = $_SERVER['HTTP_HOST'];
    switch ($host) {
        case 'santaferelo.com':
        case 'www.santaferelo.com':
            $target_url = 'https://pardot.santaferelo.com/l/75942/2024-12-12/cq1bp4';
            break;
        case 'staging.santaferelo.com':
            $target_url = 'https://go.demo.pardot.com/l/1003703/2025-02-27/4yhy';
            break;
        default:
            $target_url = 'https://go.demo.pardot.com/l/1003703/2025-02-27/4yhy';
            break;
    }

    if (!$submission) return;

    $data = $submission->get_posted_data();

    $mapped_data = array(
		'record_type'             => "01220000000K3SCAA0",
        'lead_source'             => "Santa Fe Website",
        'moving_service'          => "Moving Services",
		
        'SingleLine1'             => isset($data['SingleLine1'])    ? $data['SingleLine1']    : '',
        'SingleLine2'             => isset($data['SingleLine2'])    ? $data['SingleLine2']    : '',
        //'MovingDate'              => isset($data['MovingDate'])    ? $data['MovingDate']    : '',
        'MovingDate'              => !empty($data['MovingDate']) ? date('Y-m-d', strtotime($data['MovingDate'])) : '',
        'Radio'                   => isset($data['Radio'][0])    ? $data['Radio'][0]    : '',
		'MultiLine'               => '',
		'SingleLine'              => isset($data['SingleLine'])    ? $data['SingleLine']    : '',
		'SingleLine3'             => isset($data['SingleLine3'])    ? $data['SingleLine3']    : '',
		'Email'                   => isset($data['Email'])    ? $data['Email']    : '',
		'PhoneNumber_countrycode' => isset($data['PhoneNumber_countrycode'])    ? $data['PhoneNumber_countrycode']    : '',
		'DecisionBox2'            => (isset($data['DecisionBox2'][0]) && $data['DecisionBox2'][0] === '1') ? 'on' : '',
		'DecisionBox'             => (isset($data['DecisionBox'][0])  && $data['DecisionBox'][0]  === '1') ? 'on' : '',
		'SingleLine4'             => isset($data['SingleLine4'])    ? $data['SingleLine4']    : '',
		'SingleLine5'             => isset($data['SingleLine5'])    ? $data['SingleLine5']    : '',
		'SingleLine6'             => isset($data['SingleLine6'])    ? $data['SingleLine6']    : '',
		'SingleLine7'             => isset($data['SingleLine7'])    ? $data['SingleLine7']    : '',
		'SingleLine8'             => isset($data['SingleLine8'])    ? $data['SingleLine8']    : '',
		'SingleLine9'             => isset($data['SingleLine9'])    ? $data['SingleLine9']    : ''
    );
	
	//print_r($mapped_data);

    $response = wp_remote_post($target_url, array(
        'method'      => 'POST',
        'body'        => $mapped_data,
        'timeout'     => 15,
        'redirection' => 5,
        'blocking'    => true
    ));
	
	//print_r($response);

    if (is_wp_error($response) || wp_remote_retrieve_response_code($response) >= 400) {
        $abort = true;

        $contact_form->set_properties(array(
            'messages' => array_merge($contact_form->prop('messages'), array(
                'mail_sent_ng' => 'There was a problem submitting your request. Please try again later.'
            ))
        ));
    } else {
        $redirect_url = '';
        $headers = wp_remote_retrieve_headers($response);

        if (!empty($headers['link']) && is_array($headers['link'])) {
            foreach ($headers['link'] as $link) {
                if (strpos($link, 'rel=shortlink') !== false) {
                    if (preg_match('/<([^>]+)>/', $link, $matches)) {
                        $redirect_url = $matches[1];
                        break;
                    }
                }
            }
        }
        
        if (!$redirect_url && !empty($response['body'])) {
            if (preg_match('/<link\s+rel=["\']alternate["\']\s+hreflang=["\']x-default["\']\s+href=["\']([^"\']+)["\']\s*\/?>/i', $response['body'], $matches)) {
                $redirect_url = $matches[1];
            }
        }

        if ($redirect_url) {
            add_filter('wpcf7_ajax_json_echo', function ($response) use ($redirect_url) {
                $response['redirect_url'] = $redirect_url;
                return $response;
            });
        }
    }
}
// Get Estimate Form - CS - 19 Aug 2025 - End

/**
 * Get visitor's country ISO code using GeoTargetingWP plugin
 * 
 * @return string Country ISO code (e.g., 'US', 'UK', 'DE')
 */
if(!function_exists('get_visitor_country_code')){
    function get_visitor_country_code(){
        // Use GeoTargetingWP's built-in functions that handle licensing automatically
        if (function_exists('geot_country_code')) {
            try {
                $result = geot_country_code();
                if (!empty($result)) {
                    return $result;
                }
            } catch (Exception $e) {
                // Silently fail and use fallback
            } catch (Error $e) {
                // Silently fail and use fallback
            }
        }
        
        // Alternative GeoTargetingWP method if the above doesn't work
        if (class_exists('GeotWP\GeotargetingWP')) {
            try {
                $geot = new \GeotWP\GeotargetingWP();
                $data = $geot->getData();
                if (isset($data['country']['iso_code'])) {
                    return $data['country']['iso_code'];
                }
            } catch (Exception $e) {
                // Silently fail and use fallback
            } catch (Error $e) {
                // Silently fail and use fallback
            }
        }
        
        // Fallback to GeoIP Detect if available
        if (function_exists('geoip_detect2_get_info_from_current_ip')) {
            try {
                $geo = geoip_detect2_get_info_from_current_ip();
                if ($geo && isset($geo->country->isoCode)) {
                    return $geo->country->isoCode;
                }
            } catch (Exception $e) {
                // Silently fail and use fallback
            } catch (Error $e) {
                // Silently fail and use fallback
            }
        }
        
        // Final fallback
        return 'UK'; // For localhost testing, you could change this to 'DE', 'FR', etc.
    }
}
// var_dump(get_visitor_country_code());

function enable_wordpress_debug_logging() {
    // Enable WordPress debugging
    if (!defined('WP_DEBUG')) {
        define('WP_DEBUG', true);
    }
    
    if (!defined('WP_DEBUG_LOG')) {
        define('WP_DEBUG_LOG', true);
    }
    
    if (!defined('WP_DEBUG_DISPLAY')) {
        define('WP_DEBUG_DISPLAY', false); // Don't show errors on frontend
    }
    
    if (!defined('SCRIPT_DEBUG')) {
        define('SCRIPT_DEBUG', true);
    }
    
    // Enable PHP error logging
    error_reporting(E_ALL);
    ini_set('log_errors', 1);
    ini_set('display_errors', 0); // Don't display on frontend
    
    // Set debug log path
    $debug_log_path = ABSPATH . 'wp-content/debug.log';
    ini_set('error_log', $debug_log_path);
    
    // Create debug.log file if it doesn't exist
    if (!file_exists($debug_log_path)) {
        // Try to create the file
        $file_created = @file_put_contents($debug_log_path, '');
        if ($file_created === false) {
            // If we can't create in wp-content, try current directory
            $debug_log_path = __DIR__ . '/debug.log';
            ini_set('error_log', $debug_log_path);
            @file_put_contents($debug_log_path, '');
        }
        
        // Set permissions
        if (file_exists($debug_log_path)) {
            @chmod($debug_log_path, 0644);
        }
    }
    
    // Test if we can write to the log
    $test_message = "Debug logging test - " . date('Y-m-d H:i:s') . "\n";
    @error_log($test_message);
}

// Call the function
enable_wordpress_debug_logging();

// Optional: Add a custom error handler for better logging
function custom_error_handler($errno, $errstr, $errfile, $errline) {
    $error_message = date('Y-m-d H:i:s') . " - Error [$errno]: $errstr in $errfile on line $errline\n";
    error_log($error_message);
    return false; // Let PHP handle the error normally
}

// Set custom error handler
set_error_handler('custom_error_handler');

// Log when this function is loaded
error_log('WordPress debug logging enabled - ' . date('Y-m-d H:i:s'));