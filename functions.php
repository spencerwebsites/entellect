<?php

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'custom-logo' );
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'editor-color-palette', array(
    array(
        'name' => __( 'Entellect Blue', 'entellect' ),
        'slug' => 'entellect-blue',
        'color' => '#182B3E',
    ),
    array(
        'name' => __( 'Entellect Purple', 'entellect' ),
        'slug' => 'entellect-purple',
        'color' => '#693C8D',
    ),
    array(
        'name' => __( 'Entellect Green', 'entellect' ),
        'slug' => 'entellect-green',
        'color' => '#81A34B',
    ),
    array(
        'name' => __( 'Entellect Yellow', 'entellect' ),
        'slug' => 'entellect-yellow',
        'color' => '#C6A264',
    ),
    array(
        'name' => __( 'Entellect Gray', 'entellect' ),
        'slug' => 'entellect-gray',
        'color' => '#C4C4C4',
    ),
) );
add_theme_support( 'disable-custom-colors' );

require_once('lib/functions.php');

function sccwps_enqueue_style() {      
    //wp_enqueue_style('theme-styles', get_template_directory_uri() . '/assets/css/enviro-styles.css', array(), null, false); 
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;600&family=Open+Sans&display=swap');           
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');

}

function sccwps_enqueue_script(){

    // wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/vendors/jquery/jquery.1.11.3.min.js', array(), null, true);
    
    // wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/dist/js/enviro-js.dist.js', '', '1.0.0', true);

    // $php_array = array(
    //     'upload_url' => admin_url('async-upload.php'),
    //     'admin_ajax' => admin_url('admin-ajax.php'),
    //     'nonce'      => wp_create_nonce('media-form'),
    //     'base_url' => get_home_url()
    // );

    // wp_localize_script('main-js', 'php_array', $php_array);

    wp_enqueue_script('feather-icons', 'https://unpkg.com/feather-icons', array(), null, true);

}

add_action( 'wp_enqueue_scripts', 'sccwps_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'sccwps_enqueue_script' );

function load_custom_wp_admin_style(){
    wp_register_style( 'entellect-admin-styles', get_template_directory_uri() . '/assets/css/admin.css', false, '1.0.0' );
    wp_enqueue_style( 'entellect-admin-styles' );
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');


function sccwps_menus() {

	$locations = array(
		'primary'  => __( 'Main Menu', 'sccwps' ),
		'footer'   => __( 'Footer Menu', 'sccwps' ),
		'social'   => __( 'Social Menu', 'sccwps' ),
		'cta'   => __( 'CTA Menu', 'sccwps' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'sccwps_menus' );