			</main>

			<?php

			if ( !is_home() && !is_front_page() ) :

				$args = array( 
					'post_type' => 'service',
				);

				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) :

				?>

					<section class="bg-white">

						<div class="mx-wrap px-10 pt-10 transform -translate-y-16 flex flex-wrap justify-evenly items-top bg-white gap-10">
					
						<?php while ( $the_query->have_posts() ) : $the_query->the_post() ?>

							<a href="<?php the_permalink() ?>" class="text-center flex-1">
								<div class="mb-3 text-<?php the_field( 'color' ); ?> bg-<?php the_field( 'color' ); ?>-lt h-20 w-20 mx-auto flex items-center justify-center rounded-full hover:bg-transparent duration-300">
									<i data-feather="<?php the_field( 'icon' ); ?>" class="mx-auto"></i>
								</div>
								<?php the_title('<h3 class="text-lg">', '</h3>'); ?>
							</a>

						<?php endwhile; ?>

						</div>

					</section>

				<?php endif; wp_reset_query(); ?>
					
			<?php endif; ?>

			<?php if ( has_nav_menu( 'cta' ) ) { ?>
			<nav role="navigation" aria-label="call to action navigation" class="bg-purple px-wrap py-10 text-white">

				<?php
				wp_nav_menu( array(
					'theme_location'	=> 'cta',
					'container' 		=> false,
					'menu_class'		=> 'flex flex-wrap justify-center items-center',
					'link_before'		=> '<span class="block px-6 py-3 bg-white text-purple uppercase text-xl font-medium border-2 border-white border-solid duration-300 hover:bg-purple hover:text-white focus:bg-purple focus:text-white">',
					'link_after'		=> '</span>',
					'fallback_cb'    	=> false,
				) );
				?>

			</nav>
			<?php } ?>

			<footer role="contentinfo" class="px-wrap bg-blue text-white px-10 pt-10">

				<div class="flex flex-wrap justify-between items-center">

					<img src="" />

					<div>
						<address class="mb-2">
							Line 1
							<br/>
							Line 2
						</address>
						<a href="tel:" class=>phone</a>
						<br/>
						<a href="mailto:">email</a>
					</div>

					<nav role="navigation" aria-label="main navigation">
						<?php
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array(
								'theme_location'	=> 'primary',
								'menu_class'		=> 'flex flex-wrap justify-center items-center',
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
								'menu_class'		=> 'flex flex-wrap justify-center items-center',
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
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="underline"><?php bloginfo( 'name' ); ?></a>.
					<?php _e( 'All rights reserved. | Developed by' ); ?>
					<a href="<?php echo esc_url( __( 'https://spencercreative.co/' ) ); ?>" class="underline">
						<?php _e( 'Spencer Creative Co.' ); ?>
					</a>
				</p>

			</footer>

		<?php wp_footer(); ?>
		<script>
			feather.replace({'width':35, 'height': 35})
		</script>

	</body>
</html>
