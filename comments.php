<?php
if ( post_password_required() ) {
	return;
}

if ( $comments ) {
	?>

	<div>

		<?php
		$comments_number = absint( get_comments_number() );
		?>

		<div>

			<h2>
			<?php
			if ( ! have_comments() ) {
				_e( 'Leave a comment' );
			} elseif ( 1 === $comments_number ) {
				/* translators: %s: Post title. */
				printf( _x( 'One reply on &ldquo;%s&rdquo;', 'comments title' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s reply on &ldquo;%2$s&rdquo;',
						'%1$s replies on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}

			?>
			</h2>

		</div>

		<div>

			<?php
			wp_list_comments(
				array(
					'avatar_size' => 120,
					'style'       => 'div',
				)
			);

			$comment_pagination = paginate_comments_links(
				array(
					'echo'      => false,
					'end_size'  => 0,
					'mid_size'  => 0,
					'next_text' => __( 'Newer Comments' ) . ' <span aria-hidden="true">&rarr;</span>',
					'prev_text' => '<span aria-hidden="true">&larr;</span> ' . __( 'Older Comments' ),
				)
			);

			if ( $comment_pagination ) {
				?>

				<nav aria-label="<?php esc_attr_e( 'Comments' ); ?>">
					<?php echo wp_kses_post( $comment_pagination ); ?>
				</nav>

				<?php
			}
			?>

		</div>

	</div>

	<?php
}

if ( comments_open() || pings_open() ) {

	if ( $comments ) {
		echo '<hr aria-hidden="true" />';
	}

	comment_form(
		array(
			'class_form'         => '',
			'title_reply_before' => '<h2>',
			'title_reply_after'  => '</h2>',
		)
	);

} elseif ( is_single() ) {

	if ( $comments ) {
		echo '<hr aria-hidden="true" />';
	}

	?>

	<div>

		<p><?php _e( 'Comments are closed.' ); ?></p>

	</div><!-- #respond -->

	<?php
}
