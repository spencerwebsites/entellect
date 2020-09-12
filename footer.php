			</main>

			<?php

			if ( !is_home() && !is_front_page() ) :

				get_template_part( 'partials/service-bar' );

			endif; ?>

			<?php if ( has_nav_menu( 'cta' ) ) { ?>
			<nav role="navigation" aria-label="call to action navigation" class="bg-purple px-wrap py-10 text-white">

				<?php
				wp_nav_menu( array(
					'theme_location'	=> 'cta',
					'container' 		=> false,
					'menu_class'		=> 'flex flex-wrap justify-center items-center p-0',
					'link_before'		=> '<span class="block px-6 py-3 bg-white text-purple uppercase text-lg font-medium border-2 border-white border-solid duration-300 hover:bg-purple hover:text-white focus:bg-purple focus:text-white">',
					'link_after'		=> '</span>',
					'fallback_cb'    	=> false,
				) );
				?>

			</nav>
			<?php } ?>

			<footer role="contentinfo" class="px-wrap bg-blue text-white pt-10">

				<div class="flex flex-col md:flex-row flex-wrap justify-between items-center">

					<div class="flex md:flex-row flex-col items-center">

						<a href="<?php home_url(); ?>" class="md:mr-4"><img src="<?php site_icon_url(100); ?>" alt="<?php echo bloginfo('title'); ?>" /></a>

						<?php
						if ( is_active_sidebar( 'footer_1' ) ) {
							dynamic_sidebar( 'footer_1' );
						}
						?>
					
					</div>

					<nav role="navigation" aria-label="main navigation">
						<?php
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array(
								'theme_location'	=> 'primary',
								'menu_class'		=> 'flex flex-col md:flex-row mt-4 md:mt-0 flex-wrap p-0 justify-center items-center',
								'before'			=>'<span class="md:ml-4">',
								'after'				=>'</span>',
								'link_before'		=> '<span class="text-white hover:underline focus:underline">',
								'link_after'		=> '</span>',
								'fallback_cb'    	=> false,
							) );
						}
						?>
					</nav>

					<nav role="navigation" aria-label="social media">
						<?php
						if ( has_nav_menu( 'social' ) ) {
							wp_nav_menu( array(
								'theme_location'	=> 'social',
								'menu_class'		=> 'flex flex-col md:flex-row mt-4 md:mt-0 flex-wrap p-0 justify-center items-center',
								'before'			=>'<span class="mx-2 md:ml-4 md:mr-0">',
								'after'				=>'</span>',
								'link_before'		=> '<span class="text-white hover:underline focus:underline">',
								'link_after'		=> '</span>',
								'fallback_cb'    	=> false,
							) );
						}
						?>
					</nav>

				</div>

				<p class="text-center mt-10 mb-3 text-xs">Copyright &copy;
					<?php
					echo date_i18n(
						/* translators: Copyright date format, see https://www.php.net/date */
						_x( 'Y', 'copyright date format' )
					);
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="underline hover:no-underline focus:no-underline"><?php bloginfo( 'name' ); ?></a>.
					<?php _e( 'All rights reserved. | Developed by' ); ?>
					<a href="<?php echo esc_url( __( 'https://spencercreative.co/' ) ); ?>" class="underline hover:no-underline focus:no-underline">
						<?php _e( 'Spencer Creative Co.' ); ?>
					</a>
				</p>

			</footer>

		<?php wp_footer(); ?>
		<script>
			feather.replace({'width':35, 'height': 35});
		</script>

	</body>
</html>
