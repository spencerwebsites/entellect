<?php get_header(); ?>

	<h1><?php _e( 'Page Not Found' ); ?></h1>

	<p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.' ); ?></p>

	<?php
	get_search_form(
		array(
			'label' => __( '404 not found' ),
		)
	);
	?>

<?php
get_footer();
