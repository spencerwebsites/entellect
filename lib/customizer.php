<?php

function entellect_customizer_home_panels_register( $wp_customize ) {

    $wp_customize->add_panel(
		'entellect_settings_panel',
		array(
				'title'			=>  'Entellect Settings',
				'description'	=>  'All settings for Entellect.',
				'priority'		=>  25,
		)
	);

    $wp_customize->add_section(
        'entellect_homepage_video_options',
        array(
            'title'         => __( 'Homepage Banner Video', 'entellect' ),
            'description' 	=> __( 'Settings for the homepage video.', 'entellect' ),
            'panel'			=>'entellect_settings_panel',
            'priority'      => 5,
        )
    );

    $wp_customize->add_setting(
        'entellect_home_video_link',
        array(
            'type'          => 'theme_mod',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'entellect_home_video_link',
            array(
                'label'             => __( 'Banner Link', 'entellect' ),
                'section'         => 'entellect_homepage_video_options',
                'settings'        => 'entellect_home_video_link',
                'type'            => 'text',
                'priority'        => 15,
            )
        )
    );

}

add_action( 'customize_register', 'entellect_customizer_home_panels_register' );