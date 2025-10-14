jQuery(document).ready(function ($) {
	$('#menu-posts-destination-guides > a').attr('href','edit.php?post_type=destination-guides&page=nestedpages-destination-guides');
	$('#menu-posts-destination-guides .wp-first-item > a').attr('href','edit.php?post_type=destination-guides&page=nestedpages-destination-guides');
	$('#menu-posts-destination-guides .wp-submenu a[href="edit.php?post_type=destination-guides&page=nestedpages-destination-guides"]').text('Destination Guides');
	$('#menu-posts-destination-guides a[href="edit.php?post_type=destination-guides&page=cal_destination-guides"]').remove();
});