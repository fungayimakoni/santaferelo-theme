<?php
function field_5b588e0db929e( $value, $post_id, $field )
{
	if (!empty($value)) {
		  return $value;
	}
	$pd = get_field('pd_map', 'options');
	$value['address'] = $pd['map']['address'];
	$value['lat'] = $pd['map']['lat'];
	$value['lng'] =$pd['map']['lng'];
    return $value;
}

add_filter('acf/load_value/key=field_5b588e0db929e', 'field_5b588e0db929e', 10, 3);

function field_5b59ae48f70f3( $value, $post_id, $field )
{
	if (!empty($value)) {
		  return $value;
	}
	$pd = get_field('pd_map', 'options');
	$value = $pd['address'];
    return $value;
}

add_filter('acf/load_value/key=field_5b59ae48f70f3', 'field_5b59ae48f70f3', 10, 3);

// function field_5b59afc86f3fb( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		  return $value;
// 	}
// 	$pd = get_field('pd_map', 'options');
// 	$value = $pd['general_enquires'];
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b59afc86f3fb', 'field_5b59afc86f3fb', 10, 3);

// function field_5b59afdb6f3fc( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		  return $value;
// 	}
// 	$pd = get_field('pd_map', 'options');
// 	$value = $pd['sales'];
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b59afdb6f3fc', 'field_5b59afdb6f3fc', 10, 3);

// function field_5b59d30fcc56c( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		  return $value;
// 	}
// 	$pd = get_field('pd_map', 'options');
// 	$value = $pd['fax_1'];
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b59d30fcc56c', 'field_5b59d30fcc56c', 10, 3);

// function field_5b59ae54f70f4( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		  return $value;
// 	}
// 	$pd = get_field('pd_map', 'options');
// 	$value = $pd['email'];
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b59ae54f70f4', 'field_5b59ae54f70f4', 10, 3);

// function field_5b5066b018ab7( $value, $post_id, $field )
// {
// 	if ( ( is_admin() && get_current_screen()->post_type == 'offices') ){
// 		if (!empty($value)) {
// 			  return $value;
// 		}
// 		$pd = get_field('pd_author', 'options');
// 		$value[0]['acf_fc_layout'] = $pd['content_editor'][0]['acf_fc_layout'];
// 		$value[0]['field_5b507a862925e'] = $pd['content_editor'][0]['header'];
// 		$value[0]['field_5b5079bc2925d'] = $pd['content_editor'][0]['header_style'];
// 		$value[1]['acf_fc_layout'] = $pd['content_editor'][1]['acf_fc_layout'];
// 		$value[1]['field_5b507aae29260'] = $pd['content_editor'][1]['paragraph'];
// 	}
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b5066b018ab7', 'field_5b5066b018ab7', 10, 3);

// function field_5b716d9dee08e( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		  return $value;
// 	}
// 	$pd = get_field('pd_office_module', 'options');
// 	$value = $pd['link_title'];
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b716d9dee08e', 'field_5b716d9dee08e', 10, 3);

// function field_5b716e00ee08f( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		  return $value;
// 	}
// 	$pd = get_field('pd_office_module', 'options');
// 	$value['title'] = $pd['button_link']['title'];
// 	$value['url'] = $pd['button_link']['url'];
// 	$value['target'] = $pd['button_link']['target'];
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b716e00ee08f', 'field_5b716e00ee08f', 10, 3);


// function field_5b5ad07673667( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		  return $value;
// 	}
// 	$pd = get_field('pd_office_module', 'options');
// 	$value = $pd['header'];
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b5ad07673667', 'field_5b5ad07673667', 10, 3);

// function field_5b5acec5bbfce( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		return $value;
// 	}
// 	$pd = get_field('pd_office_module', 'options');
// 	$value = $pd['left-content'];
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b5acec5bbfce', 'field_5b5acec5bbfce', 10, 3);

// function field_5b5acfcee91af( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		return $value;
// 	}
// 	$pd = get_field('pd_office_module', 'options');
// 	$value = $pd['file_moving']['ID'];
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b5acfcee91af', 'field_5b5acfcee91af', 10, 3);

// function field_5b5acf0dbbfd0( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		  return $value;
// 	}
// 	$pd = get_field('pd_office_module', 'options');
// 	foreach ( $pd['whats_included'] as $key => $item ):
// 		$value[$key]['field_5b5ad1a35c11a'] = $item['item'];
// 		$value[$key]['field_5b5ad1ba5c11b'] = $item['link'];
// 	endforeach;
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b5acf0dbbfd0', 'field_5b5acf0dbbfd0', 10, 3);

// function field_5b5ad27b55614( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		  return $value;
// 	}
// 	$pd = get_field('pd_office_module', 'options');
// 	foreach ( $pd['add-ons'] as $key => $item ):
// 		$value[$key]['field_5b5ad27b55615'] = $item['item'];
// 		$value[$key]['field_5b5ad27b55616'] = $item['link'];
// 	endforeach;
//     return $value;
// }

// add_filter('acf/load_value/key=field_5b5ad27b55614', 'field_5b5ad27b55614', 10, 3);

// function field_5b5adb61cd5fa( $value, $post_id, $field )
// {
// 	if (!empty($value)) {
// 		  return $value;
// 	}
// 	$pd = get_field('pd_office_module', 'options');
// 	$value[0]['field_5b5adb8ecd5fb'] = $pd['call_to_action'][0]['text'];
// 	$value[0]['field_5b5adb99cd5fc']['title'] = $pd['call_to_action'][0]['link']['title'];
// 	$value[0]['field_5b5adb99cd5fc']['url'] = $pd['call_to_action'][0]['link']['url'];
//     return $value;
// }

add_filter('acf/load_value/key=field_5b5adb61cd5fa', 'field_5b5adb61cd5fa', 10, 3);

function field_5b604077fcd8b( $value, $post_id, $field )
{
	if (!empty($value)) {
		  return $value;
	}
	$pd = get_field('pd_products_services', 'options');
	$value = $pd['products_services']['title'];
    return $value;
}

add_filter('acf/load_value/key=field_5b604077fcd8b', 'field_5b604077fcd8b', 10, 3);

function field_5b604081fcd8c( $value, $post_id, $field )
{
	if (!empty($value)) {
		  return $value;
	}
	$pd = get_field('pd_products_services', 'options');
	$value = $pd['products_services']['description'];
    return $value;
}

add_filter('acf/load_value/key=field_5b604081fcd8c', 'field_5b604081fcd8c', 10, 3);

function field_5b6042b59a2df( $value, $post_id, $field )
{
	
	if (!empty($value)) {
		  return $value;
	}
	$pd = get_field('pd_products_services', 'options');
	$data =  $pd['products_services']['our_products'] ;
	foreach ( $data as $key => $item ):
		$value[$key] = $item->ID;
	endforeach;
    return $value;
}

add_filter('acf/load_value/key=field_5b6042b59a2df', 'field_5b6042b59a2df', 10, 3);

function field_5b6042db9a2e0( $value, $post_id, $field )
{
	if (!empty($value)) {
		  return $value;
	}
	$pd = get_field('pd_products_services', 'options');
	$data =  $pd['products_services']['our_services'] ;
	foreach ( $data as $key => $item ):
		$value[$key] = $item->ID;
	endforeach;
    return $value;
}

add_filter('acf/load_value/key=field_5b6042db9a2e0', 'field_5b6042db9a2e0', 10, 3);

function field_5b03f040a6ff6( $value, $post_id, $field )
{
	if ( ( is_admin() && get_current_screen()->post_type == 'offices') ){
		if (!empty($value)) {
			return $value;
		}
		$value[0]['acf_fc_layout'] = "moving_dropdown";
		$value[1]['acf_fc_layout'] = "icons_section";
		$value[1]['field_5b0bac569fb94'] = "#fafafa";
		$value[1]['field_5b2245d706e71'] = "#353c41";
		$value[1]['field_5b0b981b2c6a3'] = "From home to new home";
		$value[1]['field_5b0b98222c6a4'] = "Our aim is to deliver exceptional relocation experiences for our customers.";
		$value[1]['field_5b056575eccbd'][0]['field_5b05659aeccbe'] = "image-container sf-icons f";
		$value[1]['field_5b056575eccbd'][0]['field_5b0565c0eccbf'] = "1:1";
		$value[1]['field_5b056575eccbd'][0]['field_5b0565c6eccc0'] = "Your move consultant will keep you up-to-date
each step of the way";
		$value[1]['field_5b056575eccbd'][0]['field_5b0565cdeccc1'] = "#009dca";
		$value[1]['field_5b056575eccbd'][1]['field_5b05659aeccbe'] = "image-container sf-icons i";
		$value[1]['field_5b056575eccbd'][1]['field_5b0565c0eccbf'] = "Experience";
		$value[1]['field_5b056575eccbd'][1]['field_5b0565c6eccc0'] = "120 year’s of helping people and organisations relocate around the world.";
		$value[1]['field_5b056575eccbd'][1]['field_5b0565cdeccc1'] = "#009dca";
		$value[1]['field_5b056575eccbd'][2]['field_5b05659aeccbe'] = "image-container sf-icons h";
		$value[1]['field_5b056575eccbd'][2]['field_5b0565c0eccbf'] = "Recognised for quality";
		$value[1]['field_5b056575eccbd'][2]['field_5b0565c6eccc0'] = "Over 30 awards in the last decade";
		$value[1]['field_5b056575eccbd'][2]['field_5b0565cdeccc1'] = "#009dca";
		$value[1]['field_5b056575eccbd'][3]['field_5b05659aeccbe'] = "image-container sf-icons a";
		$value[1]['field_5b056575eccbd'][3]['field_5b0565c0eccbf'] = "We make it easy";
		$value[1]['field_5b056575eccbd'][3]['field_5b0565c6eccc0'] = "Our services are there to make your move enjoyable";
		$value[1]['field_5b056575eccbd'][3]['field_5b0565cdeccc1'] = "#009dca";
	}
    return $value;
}

add_filter('acf/load_value/key=field_5b03f040a6ff6', 'field_5b03f040a6ff6', 10, 3);