<?php 
// Register Custom Taxonomy
function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Job Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Job Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Job Category', 'text_domain' ),
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
	register_taxonomy( 'job_category', array( 'career' ), $args );

}
add_action( 'init', 'custom_taxonomy', 0 );

function relationship_options_filter($options, $field, $the_post) {
    $options["post_status"] = array("publish");
    return $options;
    }
add_filter("acf/fields/post_object/query/name=office", "relationship_options_filter", 10, 3);

// if( function_exists('acf_add_local_field_group') ):

// 	acf_add_local_field_group(array(
// 		'key' => 'group_6266bbb3bf25a',
// 		'title' => 'Careers',
// 		'fields' => array(
// 			array(
// 				'key' => 'field_6266bbdaa6b84',
// 				'label' => 'Short Decription',
// 				'name' => 'short_description',
// 				'type' => 'text',
// 				'instructions' => '',
// 				'required' => 1,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 			),
// 			array(
// 				'key' => 'field_6266bbdaa6b85',
// 				'label' => 'Email',
// 				'name' => 'email',
// 				'type' => 'email',
// 				'instructions' => '',
// 				'required' => 1,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '25',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 			),
// 			array(
// 				'key' => 'field_629cf2799b0a8',
// 				'label' => 'Office',
// 				'name' => 'office',
// 				'type' => 'post_object',
// 				'instructions' => '',
// 				'required' => 1,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '25',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'post_type' => array(
// 					0 => 'offices',
// 				),
// 				'taxonomy' => '',
// 				'allow_null' => 0,
// 				'multiple' => 0,
// 				'return_format' => 'object',
// 				'ui' => 1,
// 			),
// 			array(
// 				'key' => 'field_633ad2b7e2b2d',
// 				'label' => 'Expiration Date',
// 				'name' => 'expiration_date',
// 				'type' => 'date_picker',
// 				'instructions' => '',
// 				'required' => 1,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '25',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'display_format' => 'd/m/Y',
// 				'return_format' => 'd/m/Y',
// 				'first_day' => 1,
// 			),
// 			array(
// 				'key' => 'field_633c0a1e1ffa5',
// 				'label' => 'notified',
// 				'name' => 'notified',
// 				'type' => 'true_false',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '25',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'message' => '',
// 				'default_value' => 0,
// 				'ui' => 1,
// 				'ui_on_text' => '',
// 				'ui_off_text' => '',
// 				'readonly'=>1,
// 			),
// 			array(
// 				'key' => 'field_6266c55ca6b87',
// 				'label' => 'Additional Description',
// 				'name' => 'additional_description',
// 				'type' => 'repeater',
// 				'instructions' => '',
// 				'required' => 0,
// 				'conditional_logic' => 0,
// 				'wrapper' => array(
// 					'width' => '',
// 					'class' => '',
// 					'id' => '',
// 				),
// 				'collapsed' => 'field_6266c574a6b88',
// 				'min' => 0,
// 				'max' => 0,
// 				'layout' => 'row',
// 				'button_label' => 'Add Description',
// 				'sub_fields' => array(
// 					array(
// 						'key' => 'field_6266c574a6b88',
// 						'label' => 'Header',
// 						'name' => 'header',
// 						'type' => 'text',
// 						'instructions' => '',
// 						'required' => 0,
// 						'conditional_logic' => 0,
// 						'wrapper' => array(
// 							'width' => '',
// 							'class' => '',
// 							'id' => '',
// 						),
// 						'default_value' => '',
// 						'placeholder' => '',
// 						'prepend' => '',
// 						'append' => '',
// 						'maxlength' => '',
// 					),
// 					array(
// 						'key' => 'field_6266c57ca6b89',
// 						'label' => 'Text',
// 						'name' => 'text',
// 						'type' => 'wysiwyg',
// 						'instructions' => '',
// 						'required' => 0,
// 						'conditional_logic' => 0,
// 						'wrapper' => array(
// 							'width' => '',
// 							'class' => '',
// 							'id' => '',
// 						),
// 						'default_value' => '',
// 						'tabs' => 'all',
// 						'toolbar' => 'full',
// 						'media_upload' => 1,
// 						'delay' => 0,
// 					),
// 				),
// 			),
// 		),
// 		'location' => array(
// 			array(
// 				array(
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'career',
// 				),
// 			),
// 		),
// 		'menu_order' => 0,
// 		'position' => 'normal',
// 		'style' => 'default',
// 		'label_placement' => 'top',
// 		'instruction_placement' => 'label',
// 		'hide_on_screen' => array(
// 			0 => 'permalink',
// 			1 => 'the_content',
// 			2 => 'excerpt',
// 			3 => 'discussion',
// 			4 => 'comments',
// 			5 => 'revisions',
// 			6 => 'slug',
// 			7 => 'author',
// 			8 => 'format',
// 			9 => 'page_attributes',
// 			10 => 'featured_image',
// 			11 => 'categories',
// 			12 => 'tags',
// 			13 => 'send-trackbacks',
// 		),
// 		'active' => true,
// 		'description' => '',
// 	));
	
// endif;