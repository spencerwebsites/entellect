<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js w-full overflow-x-hidden h-full">

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class('w-full overflow-x-hidden h-full flex flex-col font-body'); ?>>

		<?php wp_body_open(); ?>

		<header role="banner" class="w-full flex justify-between items-center bg-blue px-wrap py-4 text-white">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

			<?php

			if ( has_custom_logo() ) {
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			}

			if ( is_home() || is_front_page() ) {

				echo '<h1>';

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

			<button class="block md:hidden">
				<span><?php _e( 'Menu' ); ?></span>
			</button>

			<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'cta' ) ) { ?>

				<nav role="navigation" aria-label="main navigation" class="uppercase hidden md:block">

					<ul class="flex flex-wrap items-center font-medium justify-end text-sm">
				
						<?php
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array(
								'theme_location'	=> 'primary',
								'container' 		=> false,
								'items_wrap' 		=> '%3$s',
								'before'			=>'<span class="md:ml-4">',
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
								'link_before'		=> '<span class="block px-4 py-2 bg-white text-blue uppercase border-2 border-white border-solid duration-300 hover:bg-blue hover:text-white focus:bg-blue focus:text-white">',
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
