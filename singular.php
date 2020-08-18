<?php get_header(); ?>

<?php

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();

		if ( is_home() || is_front_page() ) {

			get_template_part( 'template-parts/content', 'front-page' );

		} else {

			get_template_part( 'template-parts/content', get_post_type() );

		}
	}
}

?>

<?php get_footer(); ?>
