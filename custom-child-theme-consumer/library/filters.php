<?php

add_filter('use_block_editor_for_post_type', function($current_status, $post_type){
    return false;
    return $current_status;
}, 10, 2);

// Register Taxonomy Page Category
function create_pagecategory_tax() {

	$labels = array(
		'name'              => _x( 'Page Categories', 'taxonomy general name', 'santafe' ),
		'singular_name'     => _x( 'Page Category', 'taxonomy singular name', 'santafe' ),
		'search_items'      => __( 'Search Page Categories', 'santafe' ),
		'all_items'         => __( 'All Page Categories', 'santafe' ),
		'parent_item'       => __( 'Parent Page Category', 'santafe' ),
		'parent_item_colon' => __( 'Parent Page Category:', 'santafe' ),
		'edit_item'         => __( 'Edit Page Category', 'santafe' ),
		'update_item'       => __( 'Update Page Category', 'santafe' ),
		'add_new_item'      => __( 'Add New Page Category', 'santafe' ),
		'new_item_name'     => __( 'New Page Category Name', 'santafe' ),
		'menu_name'         => __( 'Page Category', 'santafe' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Page Category', 'santafe' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'pagecategory', array('page'), $args );

}
add_action( 'init', 'create_pagecategory_tax' );
