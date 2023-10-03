<?php
// Register Custom Post Type Investor
function create_investor_cpt() {

	$labels = array(
		'name' => _x( 'Investors', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Investor', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Investors', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Investor', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Investor Archives', 'textdomain' ),
		'attributes' => __( 'Investor Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Investor:', 'textdomain' ),
		'all_items' => __( 'All Investors', 'textdomain' ),
		'add_new_item' => __( 'Add New Investor', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Investor', 'textdomain' ),
		'edit_item' => __( 'Edit Investor', 'textdomain' ),
		'update_item' => __( 'Update Investor', 'textdomain' ),
		'view_item' => __( 'View Investor', 'textdomain' ),
		'view_items' => __( 'View Investors', 'textdomain' ),
		'search_items' => __( 'Search Investor', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Investor', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Investor', 'textdomain' ),
		'items_list' => __( 'Investors list', 'textdomain' ),
		'items_list_navigation' => __( 'Investors list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Investors list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Investor', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-grid-view',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => false,
		'capability_type' => 'post',
	);
	register_post_type( 'investor', $args );

}
add_action( 'init', 'create_investor_cpt', 0 );

// Register Custom Post Type Notice
function create_notice_cpt() {

	$labels = array(
		'name' => _x( 'Notices', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Notice', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Notices', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Notice', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Notice Archives', 'textdomain' ),
		'attributes' => __( 'Notice Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Notice:', 'textdomain' ),
		'all_items' => __( 'All Notices', 'textdomain' ),
		'add_new_item' => __( 'Add New Notice', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Notice', 'textdomain' ),
		'edit_item' => __( 'Edit Notice', 'textdomain' ),
		'update_item' => __( 'Update Notice', 'textdomain' ),
		'view_item' => __( 'View Notice', 'textdomain' ),
		'view_items' => __( 'View Notices', 'textdomain' ),
		'search_items' => __( 'Search Notice', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Notice', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Notice', 'textdomain' ),
		'items_list' => __( 'Notices list', 'textdomain' ),
		'items_list_navigation' => __( 'Notices list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Notices list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Notice', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-aside',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => false,
		'capability_type' => 'post',
	);
	register_post_type( 'notice', $args );

}
add_action( 'init', 'create_notice_cpt', 0 );


// Register Custom Post Type Gallery
function create_gallery_cpt() {

	$labels = array(
		'name' => _x( 'Galleries', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Gallery', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Galleries', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Gallery', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Gallery Archives', 'textdomain' ),
		'attributes' => __( 'Gallery Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Gallery:', 'textdomain' ),
		'all_items' => __( 'All Galleries', 'textdomain' ),
		'add_new_item' => __( 'Add New Gallery', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Gallery', 'textdomain' ),
		'edit_item' => __( 'Edit Gallery', 'textdomain' ),
		'update_item' => __( 'Update Gallery', 'textdomain' ),
		'view_item' => __( 'View Gallery', 'textdomain' ),
		'view_items' => __( 'View Galleries', 'textdomain' ),
		'search_items' => __( 'Search Gallery', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Gallery', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Gallery', 'textdomain' ),
		'items_list' => __( 'Galleries list', 'textdomain' ),
		'items_list_navigation' => __( 'Galleries list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Galleries list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Gallery', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'gallery', $args );

}
// add_action( 'init', 'create_gallery_cpt', 0 );




// Register Custom Post Type Network
function create_network_cpt() {

	$labels = array(
		'name' => _x( 'Networks', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Network', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Networks', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Network', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Network Archives', 'textdomain' ),
		'attributes' => __( 'Network Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Network:', 'textdomain' ),
		'all_items' => __( 'All Networks', 'textdomain' ),
		'add_new_item' => __( 'Add New Network', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Network', 'textdomain' ),
		'edit_item' => __( 'Edit Network', 'textdomain' ),
		'update_item' => __( 'Update Network', 'textdomain' ),
		'view_item' => __( 'View Network', 'textdomain' ),
		'view_items' => __( 'View Networks', 'textdomain' ),
		'search_items' => __( 'Search Network', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Network', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Network', 'textdomain' ),
		'items_list' => __( 'Networks list', 'textdomain' ),
		'items_list_navigation' => __( 'Networks list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Networks list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Network', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-rss',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => false,
		'capability_type' => 'post',
	);
	register_post_type( 'network', $args );

}
// add_action( 'init', 'create_network_cpt', 0 );