<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js w-full overflow-x-hidden h-full">

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class('w-full overflow-x-hidden min-h-full flex flex-col'); ?>>

		<?php wp_body_open(); ?>

		<header role="banner" class="w-full flex justify-between">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php if ( is_home() || is_front_page() ) { ?>

				<h1><?php bloginfo('name'); ?></h1>

			<?php } else { ?>

				<?php bloginfo('name'); ?>

			<?php } ?>

			</a>

			<button>
				<span><?php _e( 'Menu' ); ?></span>
			</button>

			<?php if ( has_nav_menu( 'primary' ) ) { ?>

				<nav role="navigation" aria-label="main navigation">
        
					<?php
					wp_nav_menu( array(
						'theme_location'	=> 'primary',
						'menu_class'        => 'flex flex-wrap',
						'container' 	 	=> '',
						'fallback_cb'    	=> false,
					) );
					?>
				
				</nav>

			<?php } ?>

		</header>
		
		<main role="main" class="w-full flex-1">
