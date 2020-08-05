			</main>

			<footer role="contentinfo">

				<p>&copy;
					<?php
					echo date_i18n(
						/* translators: Copyright date format, see https://www.php.net/date */
						_x( 'Y', 'copyright date format' )
					);
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					|
					<a href="<?php echo esc_url( __( 'https://spencercreative.co/' ) ); ?>">
						<?php _e( 'Developed by Spencer Creative Co.' ); ?>
					</a>
				</p>

			</footer>

		<?php wp_footer(); ?>

	</body>
</html>
