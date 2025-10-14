<?php
if (!function_exists('sf_register_country')){
  add_action( 'init', 'sf_register_country' );
  function sf_register_country() {
    $labels = array(
      "name" => __( 'Moving to', 'twentysixteen' ),
      "singular_name" => __( 'Countries', 'twentysixteen' ),
      "all_items" => __( 'Countries', 'twentysixteen' ),
      "all_items" => __( 'Countries', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Moving to', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "hierarchical" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => true,
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "rewrite" => array( "slug" => "country", "with_front" => true ),
      "query_var" => true,
      "menu_position" => 35,
      "menu_icon" => "dashicons-admin-site",
      "supports" => array( "title", "editor", "author","page-attributes", "thumbnail"),);
    register_post_type( "country", $args );
  }
}

if (!function_exists('sf_register_cities')){
  add_action( 'init', 'sf_register_cities' );
  function sf_register_cities() {
    $labels = array(
      "name" => __( 'Cities', 'twentysixteen' ),
      "singular_name" => __( 'City', 'twentysixteen' ),
      "all_items" => __( 'Cities', 'twentysixteen' ),
      "all_items" => __( 'Cities', 'twentysixteen' ),
      );

    $args = array(
    "label" => __( 'Cities', 'twentysixteen' ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "has_archive" => true,
    "show_in_menu" => true,
      "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "rewrite" => array( "slug" => "city", "with_front" => true ),
    "query_var" => true,
    "menu_position" => 40,
    "menu_icon" => "dashicons-location-alt",
    "supports" => array( "title", "editor", "author"),
      'show_in_menu' => 'edit.php?post_type=country');
    register_post_type( "city", $args );
  }
}

if (!function_exists('sf_register_tfa')){
//  add_action( 'init', 'sf_register_tfa' );
  function sf_register_tfa() {
    $labels = array(
      "name" => __( 'Forms', 'twentysixteen' ),
      "singular_name" => __( 'Forms', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Forms', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => true,
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
     // "rewrite" => array( "slug" => "forms", "with_front" => true ),

      'rewrite'    => array( 'slug' => false, 'with_front' => false),
      "query_var" => true,
      "menu_position" => 50,
      "menu_icon" => "dashicons-list-view",
      "supports" => array( "title", "editor", "author"),);
    register_post_type( "tfa", $args );
  }
}

if (!function_exists('sf_register_offices')){
  add_action( 'init', 'sf_register_offices' );
  function sf_register_offices() {
    $labels = array(
      "name" => __( 'Offices', 'twentysixteen' ),
      "singular_name" => __( 'Offices', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Offices', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => true,
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
     // "rewrite" => array( "slug" => "forms", "with_front" => true ),

      'rewrite'    => array( 'slug' => "contact/our-offices", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 45,
      "menu_icon" => "dashicons-building",
      "supports" => array( "title", "editor","author"),);
    register_post_type( "offices", $args );
  }
}


if (!function_exists('sf_register_ctg_country')){
  add_action( 'init', 'sf_register_ctg_country' );
  function sf_register_ctg_country() {
    $labels = array(
      "name" => __( 'Country', 'twentysixteen' ),
      "singular_name" => __( 'Country', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Countries', 'twentysixteen' ),
      "labels" => $labels,
      "public" => false,
      "hierarchical" => false,
      "label" => "Countries",
      "show_ui" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => false,
      "show_admin_column" => true,
      "show_in_rest" => false,
      "rest_base" => "",
      "show_in_quick_edit" => true,
    );
    register_taxonomy( "country", "offices",  $args );
  }
}

if (!function_exists('sf_register_ctg_continent')){
  add_action( 'init', 'sf_register_ctg_continent' );
  function sf_register_ctg_continent() {
    $labels = array(
      "name" => __( 'Continent', 'twentysixteen' ),
      "singular_name" => __( 'Continent', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Continents', 'twentysixteen' ),
      "labels" => $labels,
      "public" => false,
      "hierarchical" => false,
      "label" => "Countries",
      "show_ui" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => false,
      "show_admin_column" => true,
      "show_in_rest" => false,
      "rest_base" => "",
      "show_in_quick_edit" => true,
    );
    register_taxonomy( "continent", array( "offices", "custom-guides" ), $args );
  }
}

if (!function_exists('sf_register_moving_news')){
  add_action( 'init', 'sf_register_moving_news' );
  function sf_register_moving_news() {
    $labels = array(
      "name" => __( 'Moving - News and Events', 'twentysixteen' ),
      "singular_name" => __( 'Moving - News and Events', 'twentysixteen' ),
      "menu_name" => __('News and Events', 'twentysixteen' ),
      "all_items" => __('Moving', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Moving - News and Events', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => "moving/news-and-blog",
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/moving/news-and-blog", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 50,
      "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "thumbnail"),);
    register_post_type( "moving-news", $args );
  }
}

if (!function_exists('sf_register_ctg_mcat')){
  add_action( 'init', 'sf_register_ctg_mcat' );
  function sf_register_ctg_mcat() {
    $labels = array(
      "name" => __( 'Categories', 'twentysixteen' ),
      "singular_name" => __( 'Category', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Category', 'twentysixteen' ),
      "labels" => $labels,
      "public" => false,
      "hierarchical" => false,
      "label" => "Moving Categories",
      "show_ui" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => false,
      "show_admin_column" => true,
      "show_in_rest" => false,
      "rest_base" => "",
      "show_in_quick_edit" => true,
    );
    register_taxonomy( "moving-news-cat", "moving-news", $args );
  }
}

if (!function_exists('sf_register_storage_news')){
  add_action( 'init', 'sf_register_storage_news' );
  function sf_register_storage_news() {
    $labels = array(
      "name" => __( 'Storage - News and Events', 'twentysixteen' ),
      "singular_name" => __( 'Storage - News and Events', 'twentysixteen' ),
      "menu_name" => __('News and Events', 'twentysixteen' ),
      "all_items" => __('Storage', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Storage - News and Events', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => 'storage/news-and-blog',
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/storage/news-and-blog", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 50,
      'show_in_menu' => 'edit.php?post_type=moving-news',
      "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "thumbnail"),);
    register_post_type( "storage-news", $args );
  }
}

if (!function_exists('sf_register_ctg_scat')){
  add_action( 'init', 'sf_register_ctg_scat' );
  function sf_register_ctg_scat() {
    $labels = array(
      "name" => __( 'Categories', 'twentysixteen' ),
      "singular_name" => __( 'Category', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Category', 'twentysixteen' ),
      "labels" => $labels,
      "public" => false,
      "hierarchical" => false,
      "label" => "Storage Categories",
      "show_ui" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => false,
      "show_admin_column" => true,
      "show_in_rest" => false,
      "rest_base" => "",
      "show_in_quick_edit" => true,
    );
    register_taxonomy( "storage-news-cat", "storage-news", $args );
  }
}

if (!function_exists('sf_register_visa_news')){
  add_action( 'init', 'sf_register_visa_news' );
  function sf_register_visa_news() {
    $labels = array(
      "name" => __( 'Visa - News and Events', 'twentysixteen' ),
      "singular_name" => __( 'Visa - News and Events', 'twentysixteen' ),
      "menu_name" => __('News and Events', 'twentysixteen' ),
      "all_items" => __('Visa', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Visa - News and Events', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => 'visa/news-and-blog',
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/visa/news-and-blog", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 50,
      'show_in_menu' => 'edit.php?post_type=moving-news',
      "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "thumbnail"),);
    register_post_type( "visa-news", $args );
  }
}

if (!function_exists('sf_register_ctg_vcat')){
  add_action( 'init', 'sf_register_ctg_vcat' );
  function sf_register_ctg_vcat() {
    $labels = array(
      "name" => __( 'Categories', 'twentysixteen' ),
      "singular_name" => __( 'Category', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Category', 'twentysixteen' ),
      "labels" => $labels,
      "public" => false,
      "hierarchical" => false,
      "label" => "Visa Categories",
      "show_ui" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => false,
      "show_admin_column" => true,
      "show_in_rest" => false,
      "rest_base" => "",
      "show_in_quick_edit" => true,
    );
    register_taxonomy( "visa-news-cat", "visa-news", $args );
  }
}

if (!function_exists('sf_register_mobility_insights_news')){
 
  add_action( 'init', 'sf_register_mobility_insights_news' );
  function sf_register_mobility_insights_news() {
    
    /*$labels = array(
      "name" => __( 'Resources News', 'twentysixteen' ),
      "singular_name" => __( 'Resources News', 'twentysixteen' ),
      "menu_name" => __('Resources News', 'twentysixteen' ),
      "all_items" => __('All Resources News', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Resources - News', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => '/corporate-relocation/resources/news/',
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/corporate-relocation/resources/news/", 'with_front' => true),
      "query_var" => true,
      "menu_position" => 50,
      'show_in_menu' => 'edit.php?post_type=insights-news',
      "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "thumbnail"),);
    register_post_type( "insights-news", $args );*/
    $labels = array(
      'name' => _x( 'Resources News', 'Post Type General Name', 'textdomain' ),
      'singular_name' => _x( 'Resources News', 'Post Type Singular Name', 'textdomain' ),
      'menu_name' => _x( 'Resources News', 'Admin Menu text', 'textdomain' ),
      'name_admin_bar' => _x( 'Resources News', 'Add New on Toolbar', 'textdomain' ),
      'archives' => __( 'Resources News Archives', 'textdomain' ),
      'attributes' => __( 'Resources News Attributes', 'textdomain' ),
      'parent_item_colon' => __( 'Parent Resources News:', 'textdomain' ),
      'all_items' => __( 'All Resources News', 'textdomain' ),
      'add_new_item' => __( 'Add New Resources News', 'textdomain' ),
      'add_new' => __( 'Add New', 'textdomain' ),
      'new_item' => __( 'New Resources News', 'textdomain' ),
      'edit_item' => __( 'Edit Resources News', 'textdomain' ),
      'update_item' => __( 'Update Resources News', 'textdomain' ),
      'view_item' => __( 'View Resources News', 'textdomain' ),
      'view_items' => __( 'View Resources News', 'textdomain' ),
      'search_items' => __( 'Search Resources News', 'textdomain' ),
      'not_found' => __( 'Not found', 'textdomain' ),
      'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
      'featured_image' => __( 'Featured Image', 'textdomain' ),
      'set_featured_image' => __( 'Set featured image', 'textdomain' ),
      'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
      'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
      'insert_into_item' => __( 'Insert into Resources News', 'textdomain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this Resources News', 'textdomain' ),
      'items_list' => __( 'Resources News list', 'textdomain' ),
      'items_list_navigation' => __( 'Resources News list navigation', 'textdomain' ),
      'filter_items_list' => __( 'Filter Resources News list', 'textdomain' ),
    );
    $rewrite = array(
      'slug' => 'corporate-relocation/resources/news',
      'with_front' => false,
      'pages' => true,
      'feeds' => false,
    );
    $args = array(
      'label' => __( 'Resources News', 'textdomain' ),
      'description' => __( '', 'textdomain' ),
      'labels' => $labels,
      'menu_icon' => 'dashicons-admin-site-alt3',
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields'),
      'taxonomies' => array(),
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'can_export' => true,
      'has_archive' => true,
      'hierarchical' => false,
      'exclude_from_search' => false,
      'show_in_rest' => true,
      'publicly_queryable' => true,
      'capability_type' => 'post',
      'rewrite' => $rewrite,
    );
    register_post_type( 'insights-news', $args );
  }
}

if (!function_exists('sf_register_ctg_micat')){
  add_action( 'init', 'sf_register_ctg_micat' );
  function sf_register_ctg_micat() {
    
    $labels = array(
      "name" => __( 'Categories', 'twentysixteen' ),
      "singular_name" => __( 'Category', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Category', 'twentysixteen' ),
      "labels" => $labels,
      "public" => true,
      "hierarchical" => false,
      "label" => "Mobility Insights Categories",
      "show_ui" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => false,
      "show_admin_column" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "show_in_quick_edit" => true,
    );
   
    register_taxonomy( "mobility-insights-news-cat", "insights-news", $args );
  }
}

// if (!function_exists('sf_register_mobility_insights')){
//   add_action( 'init', 'sf_register_mobility_insights' );
//   function sf_register_mobility_insights() {
//     $labels = array(
//       "name" => __( 'Mobility Insights', 'twentysixteen' ),
//       "singular_name" => __( 'Mobility Insights', 'twentysixteen' ),
//       "menu_name" => __('Mobility Insights', 'twentysixteen' ),
//       "all_items" => __('Mobility Insights', 'twentysixteen' ),
//       );

//     $args = array(
//       "label" => __( 'Mobility Insights', 'twentysixteen' ),
//       "labels" => $labels,
//       "description" => "",
//       "public" => true,
//       "publicly_queryable" => true,
//       "show_ui" => true,
//       "show_in_rest" => true,
//       "rest_base" => "",
//       "has_archive" => "test-mobility",
//       "show_in_menu" => true,
//           "exclude_from_search" => false,
//       "capability_type" => "post",
//       "map_meta_cap" => true,
//       'rewrite'    => array( 'slug' => "test-mobility", 'with_front' => false),
//       "query_var" => true,
//       "menu_position" => 32,
//       "hierarchical" => true,
//       "menu_icon" => "dashicons-megaphone",
//       "supports" => array( "title", "editor", "page-attributes"),);
//     register_post_type( "mobility-insights", $args );
//   }
// }

if (!function_exists('sf_register_mobility_insights_survey')){
  add_action( 'init', 'sf_register_mobility_insights_survey' );
  function sf_register_mobility_insights_survey() {
    $labels = array(
      "name" => __( 'Mobility Insights - Global mobility survey', 'twentysixteen' ),
      "singular_name" => __( 'Mobility Insights - Global mobility survey', 'twentysixteen' ),
      "menu_name" => __('Mobility Insights', 'twentysixteen' ),
      "all_items" => __('Global mobility survey', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Mobility Insights - Global mobility survey', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => 'mobility-insights/global-mobility-survey',
      "hierarchical" => true,
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/mobility-insights/global-mobility-survey", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 32,
      "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "thumbnail", "page-attributes"),);
    register_post_type( "mobility-survey", $args );
  }
}

if (!function_exists('sf_register_mobility_insights_webinar')){
  add_action( 'init', 'sf_register_mobility_insights_webinar' );
  function sf_register_mobility_insights_webinar() {
    $labels = array(
      "name" => __( 'Mobility Insights - Webinar', 'twentysixteen' ),
      "singular_name" => __( 'Mobility Insights - Webinar', 'twentysixteen' ),
      "menu_name" => __('Webinar', 'twentysixteen' ),
      "all_items" => __('Webinar', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Mobility Insights - Webinary', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => true,
      "show_in_menu" => true,
      "hierarchical" => true,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "mobility-insights/webinar", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 50,
      'show_in_menu' => 'edit.php?post_type=mobility-survey',
      "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "thumbnail", "page-attributes" , "excerpt"),);
    register_post_type( "mobility-webinar", $args );
  }
}


if (!function_exists('sf_register_ctg_web_ctg')){
  add_action( 'init', 'sf_register_ctg_web_ctg' );
  function sf_register_ctg_web_ctg() {
    $labels = array(
      "name" => __( 'Webinar Category', 'twentysixteen' ),
      "singular_name" => __( 'Webinar Category', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Webinar Category', 'twentysixteen' ),
      "labels" => $labels,
      "public" => false,
      "hierarchical" => false,
      "label" => "Regions",
      "show_ui" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => false,
      "show_admin_column" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "show_in_quick_edit" => true,
    );
    register_taxonomy( "web_ctg", "mobility-webinar",  $args );
  }
}

add_filter( 'manage_mobility-webinar_posts_columns', 'set_custom_edit_book_columns' );
function set_custom_edit_book_columns($columns) {

    $columns['form_title'] = __( 'Form Title', 'your_text_domain' );
    return $columns;
}

add_action( 'manage_mobility-webinar_posts_custom_column' , 'custom_book_column', 10, 2 );
function custom_book_column( $column, $post_id ) {
    switch ( $column ) {

        case 'form_title' :
          if(get_field( 'form_assembly_title', $post->ID )):
            echo get_field( 'form_assembly_title', $post->ID );
            if( get_field( 'form_assembly_id', $post->ID) ):
              echo '('.get_field( 'form_assembly_id', $post->ID).')';
            endif;
          else:
            echo '--';
          endif;
          break;
    }
}


if (!function_exists('sf_register_mobility_insights_paper')){
  add_action( 'init', 'sf_register_mobility_insights_paper' );
  function sf_register_mobility_insights_paper() {
    $labels = array(
      "name" => __( 'Mobility Insights - White papers', 'twentysixteen' ),
      "singular_name" => __( 'Mobility Insights - White papers', 'twentysixteen' ),
      "menu_name" => __('White papers', 'twentysixteen' ),
      "all_items" => __('White papers', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Mobility Insights - White papers', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "hierarchical" => true,
      "has_archive" => 'mobility-insights/white-papers',
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/mobility-insights/white-papers", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 50,
      'show_in_menu' => 'edit.php?post_type=mobility-survey',
      "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "thumbnail","page-attributes"),);
    register_post_type( "mobility-wpapers", $args );
  }
}

if (!function_exists('sf_register_mobility_insights_events')){
  add_action( 'init', 'sf_register_mobility_insights_events' );
  function sf_register_mobility_insights_events() {
    $labels = array(
      "name" => __( 'Mobility Insights - Events', 'twentysixteen' ),
      "singular_name" => __( 'Mobility Insights - Events', 'twentysixteen' ),
      "menu_name" => __('Events', 'twentysixteen' ),
      "all_items" => __('Events', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Mobility Insights - Events', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "hierarchical" => true,
      "has_archive" => 'mobility-insights/events',
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/mobility-insights/events", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 50,
      'show_in_menu' => 'edit.php?post_type=mobility-survey',
      "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "thumbnail","page-attributes", "excerpt"),);
    register_post_type( "mobility-events", $args );
  }
}

if (!function_exists('sf_register_internations')){
  add_action( 'init', 'sf_register_internations' );
  function sf_register_internations() {
    $labels = array(
      "name" => __( 'Internations/ Translated Languages', 'twentysixteen' ),
      "singular_name" => __( 'Internations/ Translated Languages', 'twentysixteen' ),
      "menu_name" => __('Campaigns', 'twentysixteen' ),
      "all_items" => __('Internations/ Translated Languages', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Internations/ Translated Languages', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => false,
      "show_in_menu" => true,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => true,
      'rewrite'    => array( 'slug' => 'campaigns', 'with_front' => false),
      "query_var" => true,
      "menu_position" => 35,
      "menu_icon" => "dashicons-admin-site",
      "supports" => array( "title", "editor", "page-attributes")
    );
    register_post_type( "internations", $args );
  }
}

if (!function_exists('sf_register_corp_relo_guides')){
  add_action( 'init', 'sf_register_corp_relo_guides' );
  function sf_register_corp_relo_guides() {
    $labels = array(
      "name" => __( 'Corporate Relocation - Custom Guides and forms', 'twentysixteen' ),
      "singular_name" => __( 'Corporate Relocation - Custom Guides and forms', 'twentysixteen' ),
      "menu_name" => __('Custom Guides and forms', 'twentysixteen' ),
      "all_items" => __('Custom Guides and forms', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Corporate Relocation - Custom Guides and forms', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => 'corporate-relocation/custom-guides-and-forms',
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/corporate-relocation/custom-guides-and-forms", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 31,
      "menu_icon" => "dashicons-list-view'",
      "supports" => array( "title", "editor")
    );
    register_post_type( "custom-guides", $args );
  }
}

function remove_cpt_slug( $post_link, $post, $leavename ) {
 
    if ( 'tfa' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
 
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
 
    return $post_link;
}
add_filter( 'post_type_link', 'remove_cpt_slug', 10, 3 );


function change_slug_struct( $query ) {
 
    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }
 
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'tfa', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'change_slug_struct' );

add_action('admin_menu', 'remove_niggly_bits');
function remove_niggly_bits() {
    global $submenu;
    unset($submenu['edit.php?post_type=country'][10]);
    unset($submenu['edit.php?post_type=offices'][10]);
    unset($submenu['edit.php?post_type=moving-news'][10]);
    unset($submenu['edit.php?post_type=mobility-survey'][10]);
    unset($submenu['edit.php?post_type=custom-guides'][10]);
    unset($submenu['edit.php?post_type=uk-content'][10]);
}

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Office Hub Page',
    'parent'     => 'edit.php?post_type=offices',
    'capability' => 'manage_options'
  ));
}

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Menu Settings',
    'parent'     => 'edit.php?post_type=internations',
    'capability' => 'manage_options'
  ));
}

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Predefined Content',
    'parent'     => 'edit.php?post_type=offices',
    'capability' => 'manage_options'
  ));
}

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Blog Settings',
    'parent'     => 'edit.php?post_type=moving-news',
    'capability' => 'manage_options'
  ));
}

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Mobility Insight Hub Pages',
    'parent'     => 'edit.php?post_type=mobility-survey',
    'capability' => 'manage_options'
  ));
}

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Mobility Insight Settings',
    'parent'     => 'edit.php?post_type=mobility-survey',
    'capability' => 'manage_options'
  ));
}

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Custom Guide Hub Page',
    'parent'     => 'edit.php?post_type=custom-guides',
    'capability' => 'manage_options'
  ));
}

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Local Content Settings',
    'parent'     => 'edit.php?post_type=uk-content',
    'capability' => 'manage_options'
  ));
}

if ( function_exists( 'acf_add_options_sub_page' ) ){
  acf_add_options_sub_page(array(
    'title'      => 'Destination Guide landing page',
    'parent'     => 'edit.php?post_type=destination-guides',
    'capability' => 'manage_options'
  ));
}

if (!function_exists('sf_register_translated_uk')){
  add_action( 'init', 'sf_register_translated_uk' );
  function sf_register_translated_uk() {
    $labels = array(
      "name" => __( 'UK Content' ),
      "singular_name" => __( 'UK', 'twentysixteen' ),
      "menu_name" => __('Local Content', 'twentysixteen' ),
      "all_items" => __('UK', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'UK', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => false,
      "hierarchical" => true,
      "show_in_menu" => true,
          "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/gb", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 32,
      // "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author","page-attributes"),);
    register_post_type( "uk-content", $args );
  }
}

if (!function_exists('sf_register_translated_us')){
  add_action( 'init', 'sf_register_translated_us' );
  function sf_register_translated_us() {
    $labels = array(
      "name" => __( 'US' ),
      "singular_name" => __( 'US', 'twentysixteen' ),
      "all_items" => __('US', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'US', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => false,
      "hierarchical" => true,
     'show_in_menu' => 'edit.php?post_type=uk-content',
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/us", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 32,
      // "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author","page-attributes"),);
    register_post_type( "us-content", $args );
  }
}

if (!function_exists('sf_register_translated_hk')){
  add_action( 'init', 'sf_register_translated_hk' );
  function sf_register_translated_hk() {
    $labels = array(
      "name" => __( 'HK' ),
      "singular_name" => __( 'HK', 'twentysixteen' ),
      "all_items" => __('HK', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'HK', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => false,
      "hierarchical" => true,
     'show_in_menu' => 'edit.php?post_type=uk-content',
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/hk", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 32,
      // "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "page-attributes"),);
    register_post_type( "hk-content", $args );
  }
}

if (!function_exists('sf_register_translated_sg')){
  add_action( 'init', 'sf_register_translated_sg' );
  function sf_register_translated_sg() {
    $labels = array(
      "name" => __( 'SG' ),
      "singular_name" => __( 'SG', 'twentysixteen' ),
      "all_items" => __('SG', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'SG', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => false,
      "hierarchical" => true,
     'show_in_menu' => 'edit.php?post_type=uk-content',
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/sg", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 32,
      // "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "page-attributes"),);
    register_post_type( "sg-content", $args );
  }
}

if (!function_exists('sf_register_translated_uae')){
  add_action( 'init', 'sf_register_translated_uae' );
  function sf_register_translated_uae() {
    $labels = array(
      "name" => __( 'AE' ),
      "singular_name" => __( 'AE', 'twentysixteen' ),
      "all_items" => __('AE', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'AE', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => false,
      "hierarchical" => true,
     'show_in_menu' => 'edit.php?post_type=uk-content',
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/ae", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 32,
      // "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "page-attributes"),);
    register_post_type( "uae-content", $args );
  }
}

if (!function_exists('sf_register_translated_in')){
   add_action( 'init', 'sf_register_translated_in' );
  function sf_register_translated_in() {
    $labels = array(
      "name" => __( 'IN' ),
      "singular_name" => __( 'IN', 'twentysixteen' ),
      "all_items" => __('IN', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'IN', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => false,
      "hierarchical" => true,
     'show_in_menu' => 'edit.php?post_type=uk-content',
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/in", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 32,
      // "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "page-attributes"),);
    register_post_type( "in-content", $args );
  }
}

//add_action( 'wp_ajax_nopriv_ip_module_frontpage', 'ip_module_frontpage' );
//add_action( 'wp_ajax_ip_module_frontpage', 'ip_module_frontpage' );
function ip_module_frontpage() {

  $id = $_REQUEST['ajax_id'];
    $lang = $_REQUEST['ip_lang'];
    $expiry =  '30000000';

    $fpip = get_field('ip_module_front', $id);
    if ( $fpip['expiry_date'] ):
      $expiry = $fpip['expiry_date'];
    endif;
    if( ( in_array( $lang , $fpip['country_show_new'], FALSE ) &&  ( $expiry > date('Ymd') ) ) ):
    echo '<div class="ip-module">';
      echo '<div class="container">';
        echo '<div class="uk-grid-match uk-child-width-1-'.( $fpip['module_layout'] == 'two' ? '2' : '1').'" uk-grid>';
         foreach( $fpip['module_select'] as $new ):
          echo '<div '.( (get_field('module_type', $new) == 'banner') ? 'class="banner-container"' : '' ).'>';
              if( get_field('module_type', $new) == 'banner'):
                $item = get_field('banner', $new);
                  echo '<div class="module-banner uk-height-medium" data-src="'.$item['img']['url'].'" uk-img>';
                    echo '<div class="gradient">';
                      echo '<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover">';
                        echo '<div>';
                          echo '<p>'.$item['banner_type'].'</p>';
                          echo '<h3>'.$item['banner_title'].'</h3>';
                          if($item['banner_link']):
                            echo '<a class="button primary" href="'.$item['banner_link']['url'].'">'.$item['banner_link']['title'].'</a>';
                          endif;
                        echo '</div>';
                      echo '</div>';
                    echo '</div>';
                  echo '</div>';
                endif;
                if( get_field('module_type', $new) == 'content'):
                  $item = get_field('content', $new);
                  echo '<div class="gray uk-height-medium">';
                    echo '<div class="module-content">';
                      if( $item['title'] ):
                        echo '<h3>'.$item['title'].'</h3>';
                      endif;
                      if( $item['description'] ):
                        echo '<p>'.$item['description'].'</p>';
                      endif;
                      if($item['checklist']):
                        echo '<ul>';
                          foreach( $item['checklist'] as $line ):
                            echo '<li>'.$line['item'].'</li>';
                          endforeach;
                        echo '</ul>';
                      endif;
                      if( $item['link'] ):
                        echo '<p><a href="'.$item['link']['url'].'"><span>'.$item['link']['title'].'</span></a></p>';
                      endif;
                    echo '</div>';
                  echo '</div>';
                endif;
                if( get_field('module_type', $new) == 'contact'):
                  $item = get_field('contact', $new);
                  echo '<div class="uk-height-medium black">';
                    echo '<div class="module-contact">';
                      echo '<h3>Get in touch</h3>';
                      echo '<div>';
                        echo 'Address';
                        echo '<p>'.$item['address'].'</p>';
                      echo '</div>';
                      echo '<div>';
                        echo 'Speak to a move consultant';
                        echo '<p>'.$item['phone'].'</p>';
                      echo '</div>';
                      echo '<div>';
                        echo "Email";
                        echo '<p>'.$item['email'].'</p>';
                      echo '</div>';
                      
                    echo '</div>';
                  echo '</div>';
                endif;
              echo '</div>';
        endforeach;
      echo '</div>';
    echo '</div>';
  endif;

  die();
}
  
if (!function_exists('sf_register_ip_module')){
  //add_action( 'init', 'sf_register_ip_module' );
  function sf_register_ip_module() {
    $labels = array(
      "name" => __( 'IP Module' ),
      "singular_name" => __( 'IP Module', 'twentysixteen' ),
      "all_items" => __('IP Module', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'IP Module', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => false,
      "hierarchical" => true,
     'show_in_menu' => 'edit.php?post_type=uk-content',
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "/ip-content", 'with_front' => false),
      "query_var" => true,
      // "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title"),);
    register_post_type( "ip-content", $args );
  }
}

// add_filter( 'template_include', function( $template ) 
// {
//     // your custom post types
//     $my_types = array( 'uk-content', 'us-content','hk-content', 'sg-content','uae-content', 'in-content' );
//     $post_type = get_post_type();

//     if ( ! in_array( $post_type, $my_types ) )
//         return $template;

//     return get_stylesheet_directory() . '/index.php'; 
// });

if (!function_exists('sf_register_dguide')){
  //add_action( 'init', 'sf_register_dguide' );
  function sf_register_dguide() {
    $labels = array(
      "name" => __( 'Destination Guides' ),
      "singular_name" => __( 'Destination Guides', 'twentysixteen' ),
      "all_items" => __('Destination Guides', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Destination Guides', 'twentysixteen' ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "has_archive" => true,
      "hierarchical" => true,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      'rewrite'    => array( 'slug' => "destination-guides", 'with_front' => false),
      "query_var" => true,
      "menu_position" => 28,
      // "menu_icon" => "dashicons-megaphone",
      "supports" => array( "title", "editor","author", "page-attributes", "thumbnail"),);
    register_post_type( "destination-guides", $args );
  }
}

if (!function_exists('sf_register_ctg_region')){
  //add_action( 'init', 'sf_register_ctg_region' );
  function sf_register_ctg_region() {
    $labels = array(
      "name" => __( 'Region', 'twentysixteen' ),
      "singular_name" => __( 'Region', 'twentysixteen' ),
      );

    $args = array(
      "label" => __( 'Region', 'twentysixteen' ),
      "labels" => $labels,
      "public" => false,
      "hierarchical" => false,
      "label" => "Regions",
      "show_ui" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => false,
      "show_admin_column" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "show_in_quick_edit" => true,
    );
    register_taxonomy( "region", "destination-guides",  $args );
  }
}

function remove_post_custom_fields() {
  remove_meta_box( 'tagsdiv-region' , 'destination-guides' , 'normal' ); 
}
add_action( 'admin_menu' , 'remove_post_custom_fields' );

// Register Custom Post Type Career
function create_career_cpt() {

	$labels = array(
		'name' => _x( 'Careers', 'Post Type General Name', 'santafe' ),
		'singular_name' => _x( 'Career', 'Post Type Singular Name', 'santafe' ),
		'menu_name' => _x( 'Careers', 'Admin Menu text', 'santafe' ),
		'name_admin_bar' => _x( 'Career', 'Add New on Toolbar', 'santafe' ),
		'archives' => __( 'Career Archives', 'santafe' ),
		'attributes' => __( 'Career Attributes', 'santafe' ),
		'parent_item_colon' => __( 'Parent Career:', 'santafe' ),
		'all_items' => __( 'All Careers', 'santafe' ),
		'add_new_item' => __( 'Add New Career', 'santafe' ),
		'add_new' => __( 'Add New', 'santafe' ),
		'new_item' => __( 'New Career', 'santafe' ),
		'edit_item' => __( 'Edit Career', 'santafe' ),
		'update_item' => __( 'Update Career', 'santafe' ),
		'view_item' => __( 'View Career', 'santafe' ),
		'view_items' => __( 'View Careers', 'santafe' ),
		'search_items' => __( 'Search Career', 'santafe' ),
		'not_found' => __( 'Not found', 'santafe' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'santafe' ),
		'featured_image' => __( 'Featured Image', 'santafe' ),
		'set_featured_image' => __( 'Set featured image', 'santafe' ),
		'remove_featured_image' => __( 'Remove featured image', 'santafe' ),
		'use_featured_image' => __( 'Use as featured image', 'santafe' ),
		'insert_into_item' => __( 'Insert into Career', 'santafe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Career', 'santafe' ),
		'items_list' => __( 'Careers list', 'santafe' ),
		'items_list_navigation' => __( 'Careers list navigation', 'santafe' ),
		'filter_items_list' => __( 'Filter Careers list', 'santafe' ),
	);
	$rewrite = array(
		'slug' => '/corporate-relocation/careers',
		'with_front' => false,
	);
	$args = array(
		'label' => __( 'Career', 'santafe' ),
		'description' => __( 'Career Custom Post type', 'santafe' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'career', $args );

}
add_action( 'init', 'create_career_cpt', 0 );