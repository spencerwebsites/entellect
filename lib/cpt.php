<?php

// Register Custom Post Type
function service() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'entellect' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'entellect' ),
		'menu_name'             => __( 'Services', 'entellect' ),
		'name_admin_bar'        => __( 'Service', 'entellect' ),
		'archives'              => __( 'Service Archives', 'entellect' ),
		'attributes'            => __( 'Service Attributes', 'entellect' ),
		'parent_item_colon'     => __( 'Parent Service:', 'entellect' ),
		'all_items'             => __( 'All Services', 'entellect' ),
		'add_new_item'          => __( 'Add New Service', 'entellect' ),
		'add_new'               => __( 'Add New', 'entellect' ),
		'new_item'              => __( 'New Service', 'entellect' ),
		'edit_item'             => __( 'Edit Service', 'entellect' ),
		'update_item'           => __( 'Update Service', 'entellect' ),
		'view_item'             => __( 'View Service', 'entellect' ),
		'view_items'            => __( 'View Services', 'entellect' ),
		'search_items'          => __( 'Search Service', 'entellect' ),
		'not_found'             => __( 'Not found', 'entellect' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'entellect' ),
		'featured_image'        => __( 'Featured Image', 'entellect' ),
		'set_featured_image'    => __( 'Set featured image', 'entellect' ),
		'remove_featured_image' => __( 'Remove featured image', 'entellect' ),
		'use_featured_image'    => __( 'Use as featured image', 'entellect' ),
		'insert_into_item'      => __( 'Insert into service', 'entellect' ),
		'uploaded_to_this_item' => __( 'Uploaded to this service', 'entellect' ),
		'items_list'            => __( 'Services list', 'entellect' ),
		'items_list_navigation' => __( 'Services list navigation', 'entellect' ),
		'filter_items_list'     => __( 'Filter services list', 'entellect' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'entellect' ),
		'description'           => __( 'Services', 'entellect' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'rewrite'            	=> array( 'slug' => 'services' ),
		'menu_icon'				=> 'dashicons-analytics',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'service', 0 );

function event() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'entellect' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'entellect' ),
		'menu_name'             => __( 'Events', 'entellect' ),
		'name_admin_bar'        => __( 'Event', 'entellect' ),
		'archives'              => __( 'Event Archives', 'entellect' ),
		'attributes'            => __( 'Event Attributes', 'entellect' ),
		'parent_item_colon'     => __( 'Parent Event:', 'entellect' ),
		'all_items'             => __( 'All Events', 'entellect' ),
		'add_new_item'          => __( 'Add New Event', 'entellect' ),
		'add_new'               => __( 'Add New', 'entellect' ),
		'new_item'              => __( 'New Event', 'entellect' ),
		'edit_item'             => __( 'Edit Event', 'entellect' ),
		'update_item'           => __( 'Update Event', 'entellect' ),
		'view_item'             => __( 'View Event', 'entellect' ),
		'view_items'            => __( 'View Events', 'entellect' ),
		'search_items'          => __( 'Search Event', 'entellect' ),
		'not_found'             => __( 'Not found', 'entellect' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'entellect' ),
		'featured_image'        => __( 'Featured Image', 'entellect' ),
		'set_featured_image'    => __( 'Set featured image', 'entellect' ),
		'remove_featured_image' => __( 'Remove featured image', 'entellect' ),
		'use_featured_image'    => __( 'Use as featured image', 'entellect' ),
		'insert_into_item'      => __( 'Insert into event', 'entellect' ),
		'uploaded_to_this_item' => __( 'Uploaded to this event', 'entellect' ),
		'items_list'            => __( 'Events list', 'entellect' ),
		'items_list_navigation' => __( 'Events list navigation', 'entellect' ),
		'filter_items_list'     => __( 'Filter events list', 'entellect' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'entellect' ),
		'description'           => __( 'Events', 'entellect' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 30,
		'rewrite'            	=> array( 'slug' => 'events' ),
		'menu_icon'				=> 'dashicons-calendar',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'event', 0 );