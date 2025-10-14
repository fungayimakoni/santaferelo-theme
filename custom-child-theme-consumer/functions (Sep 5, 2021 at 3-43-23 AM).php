<?php



require_once( trailingslashit( get_stylesheet_directory() ). 'module/functions.php' );
require_once( trailingslashit( get_stylesheet_directory() ). 'module/function-ajax.php' );
require_once( trailingslashit( get_stylesheet_directory() ). 'module/acf-predefined.php' );

/* PARENT THEME TO CHILD THEME FILES */
	function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    // if (is_page_template('template-tfa.php')){ 
    // }else{
        //wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.0.min.js', array(), '1.11.0');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery-3.5.1.min.js', array(), '3.5.1');
    // };

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-main', get_stylesheet_directory_uri() . '/css/main.css', array( $parent_style ));
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
    wp_enqueue_style( 'pages_mobile', get_stylesheet_directory_uri() . '/css/pages_mobile.css', array( $parent_style ));
    wp_enqueue_style( 'live-updates', get_stylesheet_directory_uri() . '/css/update.css', array( $parent_style ));
    wp_enqueue_style( 'odometer', get_stylesheet_directory_uri() . '/css/odometer-theme-default.css', array( $parent_style ));
    wp_enqueue_style( 'datepicker', get_stylesheet_directory_uri() . '/css/jquery-ui.min.css', array( $parent_style ));
    wp_enqueue_style( 'flag', get_stylesheet_directory_uri() . '/css/flags.css', array( $parent_style ));
    wp_enqueue_style( 'dd', get_stylesheet_directory_uri() . '/css/dd.css', array( $parent_style ));
    wp_enqueue_style( 'extend', get_stylesheet_directory_uri() . '/css/extend.css', array( $parent_style ));
    wp_enqueue_style( 'fronpage2020', get_stylesheet_directory_uri() . '/css/frontpage2020.css', array( $parent_style ));

    wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/js/vendor/slick.min.js', array('jquery'), '1', true);
    wp_enqueue_script('datepicker', get_stylesheet_directory_uri() . '/js/vendor/jquery-ui.min.js', array('jquery'), '1', true);
    wp_enqueue_script('odometer-js', get_stylesheet_directory_uri() . '/dist/odometer.min.js', array(), '1', true);
    wp_enqueue_script('uikit', get_stylesheet_directory_uri() . '/js/vendor/uikit.min.js', array('jquery'), '1', true);
    wp_enqueue_script('zohoform', get_stylesheet_directory_uri() . '/dist/zohoform.js', array('jquery'), '1', true);
        wp_enqueue_script('validate', get_stylesheet_directory_uri() . '/dist/jquery.validate.js', array('jquery'), '1', true);
    wp_enqueue_script('additional-methods', get_stylesheet_directory_uri() . '/dist/additional-methods.js', array('jquery'), '1', true);
    wp_enqueue_script('prism', get_stylesheet_directory_uri() . '/dist/prism.js', array('jquery'), '1', true);
    wp_enqueue_script('intlTelInput', get_stylesheet_directory_uri() . '/dist/intlTelInput.js', array('jquery'), '1', true);
    wp_enqueue_script('uikit-icon', get_stylesheet_directory_uri() . '/js/vendor/uikit-icons.min.js', array('jquery'), '1', true);
    wp_enqueue_script('iso', get_stylesheet_directory_uri() . '/js/vendor/isotope-docs.min.js', array('jquery'), '1', true);
    wp_enqueue_script('geocomplete', get_stylesheet_directory_uri() . '/dist/geocomplete.js', array(), '1', true);
    wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/dist/main.js', array(), '1', true);
    wp_enqueue_script('ajax-js', get_stylesheet_directory_uri() . '/dist/ajax.js', array(), '1.1', true);
    wp_enqueue_script('ip-js', get_stylesheet_directory_uri() . '/dist/ipajax.js', array(), '1', true);
    wp_enqueue_script('detect-js', get_stylesheet_directory_uri() . '/dist/detect.min.js', array(), '1', true);
    
    wp_localize_script( 'ajax-js', 'adminajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    wp_enqueue_script('flag-js', get_stylesheet_directory_uri() . '/dist/jquery.dd.min.js', array(), '1', true);
    if ( ( is_page( array (3518, 3566, 641,7725,7726,7728) ) ) || ( is_front_page() ) ){
        wp_enqueue_style( 'zoho_form', get_stylesheet_directory_uri() . '/css/zoho_form.css');
    } 
    if ( ( is_page( array( 7501,7212,1114,9042,9147,9155,9159,9050,717,7180,7157,7921,7923,4336,8540,9521,9523) ) ) ){

        wp_enqueue_style( 'zoho_form_nonapi', get_stylesheet_directory_uri() . '/css/zoho_form_nonapi.css');
    } 
  
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
			'after_widget'  => '</div>',
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
                echo "<li class='page-nav'><a href='".get_pagenum_link($paged - 1)."' aria-label='Previous' ".($paged == 1 ? "class='disabled'" : "")."><span class='hidden-xs'> < </span></a></li>";
                for ($i=1; $i <= $pages; $i++) {
                    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                        echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
                    }
                }
                echo "<li class='page-nav'><a href=\"".get_pagenum_link($paged + 1)."\"  aria-label='Next' ".($paged == $pages ? "class='disabled'" : "")."><span class='hidden-xs'> > </span></a></li>";
            echo "</ul></nav>";
        echo "</div>";
     }
}

add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    if ( ( $args->theme_location == 'top-menu' ) || ( $args->theme_location == 'new-top-menu-right' ) ) {
        $flag = qtrans_getLanguage();
        $items .= '<li class="menu-item flag" id="menu-flag"><a href="#modal-country" uk-toggle>GB<i class="material-icons">language</i></a></li>';
    }
    return $items;
}

add_filter( 'wp_nav_menu_items', 'sidepanel_menu', 10, 2 );
function sidepanel_menu ( $items, $args ) {
    if ($args->theme_location == 'primary') {
        $flag = qtrans_getLanguage();
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