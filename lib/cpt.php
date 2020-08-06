<?php

// Register Custom Post Type
function service() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'entellect' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'entellect' ),
		'menu_name'             => __( 'Services', 'entellect' ),
		'name_admin_bar'        => __( 'Service', 'entellect' ),
		'archives'              => __( 'Item Archives', 'entellect' ),
		'attributes'            => __( 'Item Attributes', 'entellect' ),
		'parent_item_colon'     => __( 'Parent Item:', 'entellect' ),
		'all_items'             => __( 'All Items', 'entellect' ),
		'add_new_item'          => __( 'Add New Item', 'entellect' ),
		'add_new'               => __( 'Add New', 'entellect' ),
		'new_item'              => __( 'New Item', 'entellect' ),
		'edit_item'             => __( 'Edit Item', 'entellect' ),
		'update_item'           => __( 'Update Item', 'entellect' ),
		'view_item'             => __( 'View Item', 'entellect' ),
		'view_items'            => __( 'View Items', 'entellect' ),
		'search_items'          => __( 'Search Item', 'entellect' ),
		'not_found'             => __( 'Not found', 'entellect' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'entellect' ),
		'featured_image'        => __( 'Featured Image', 'entellect' ),
		'set_featured_image'    => __( 'Set featured image', 'entellect' ),
		'remove_featured_image' => __( 'Remove featured image', 'entellect' ),
		'use_featured_image'    => __( 'Use as featured image', 'entellect' ),
		'insert_into_item'      => __( 'Insert into item', 'entellect' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'entellect' ),
		'items_list'            => __( 'Items list', 'entellect' ),
		'items_list_navigation' => __( 'Items list navigation', 'entellect' ),
		'filter_items_list'     => __( 'Filter items list', 'entellect' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'entellect' ),
		'description'           => __( 'Services', 'entellect' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
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