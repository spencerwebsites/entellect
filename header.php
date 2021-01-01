<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js w-full overflow-x-hidden h-full">

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class('w-full overflow-x-hidden min-h-full flex flex-col font-body md:overflow-y-auto'); ?>>

		<?php wp_body_open(); ?>

		<header id="header" role="banner" class="w-full flex justify-between items-center bg-blue px-wrap py-4 text-white z-50">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

			<?php

			if ( has_custom_logo() ) {
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			}

			if ( is_home() || is_front_page() ) {

				echo '<h1 class="mt-0">';

					if ( has_custom_logo() ) {
						echo '<img src="' . $image[0] . '" alt="' . get_bloginfo('name') . '" style="max-width: 150px" />';
					} else {
						echo bloginfo('name');
					}

				echo '</h1>';

			} else {

				if ( has_custom_logo() ) {
					echo '<img src="' . $image[0] . '" alt="' . get_bloginfo('name') . '" style="max-width: 150px" />';
				} else {
					echo bloginfo('name');
				}

			}

			?>

			</a>

			<button class="flex items-center md:hidden relative z-30 uppercase font-bold" id="menu-toggle">
				<i data-feather="menu" aria-hidden="true" class="mr-1" width="25" height="25"></i><?php _e( 'Menu' ); ?>
			</button>

			<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'cta' ) ) { ?>

				<nav id="main-nav" role="navigation" aria-label="main navigation" class="uppercase hidden md:block fixed md:static top-0 left-0 h-full w-full bg-blue py-20 px-wrap md:p-0 z-20">

					<ul class="flex flex-wrap flex-col md:flex-row items-center font-medium justify-end text-sm p-0">

						<?php
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array(
								'theme_location'	=> 'primary',
								'container' 		=> false,
								'items_wrap' 		=> '%3$s',
								'before'			=>'<span class="text-2xl text-center block mb-4 md:my-1 md:text-sm md:mx-2">',
								'after'				=>'</span>',
								'link_before'		=> '<span class="text-white hover:underline focus:underline">',
								'link_after'		=> '</span>',
								'fallback_cb'    	=> false,
							) );
						}
						?>

						<?php
						if ( has_nav_menu( 'cta' ) ) {
							wp_nav_menu( array(
								'theme_location'	=> 'cta',
								'container' 		=> false,
								'items_wrap' 		=> '%3$s',
								'before'			=>'<span class="block md:ml-4">',
								'after'				=>'</span>',
								'link_before'		=> '<span class="block px-4 py-2 bg-white text-xl md:text-base text-blue mb-4 md:mb-0 uppercase text-center border-2 border-white border-solid duration-300 hover:bg-blue hover:text-white focus:bg-blue focus:text-white">',
								'link_after'		=> '</span>',
								'fallback_cb'    	=> false,
							) );
						}
						?>

					</ul>

				</nav>

			<?php } ?>

		</header>

		<main role="main" class="w-full flex-1 px-wrap">
