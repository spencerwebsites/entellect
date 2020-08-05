<?php get_header(); ?>

<?php

$archive_title    = '';
$archive_subtitle = '';

if ( is_search() ) {
	global $wp_query;

	$archive_title = sprintf(
		'%1$s %2$s',
		'<span>' . __( 'Search:' ) . '</span>',
		'&ldquo;' . get_search_query() . '&rdquo;'
	);

	if ( $wp_query->found_posts ) {
		$archive_subtitle = sprintf(
			/* translators: %s: Number of search results. */
			_n(
				'We found %s result for your search.',
				'We found %s results for your search.',
				$wp_query->found_posts,
			),
			number_format_i18n( $wp_query->found_posts )
		);
	} else {
		$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.' );
	}
} elseif ( ! is_home() ) {
	$archive_title    = get_the_archive_title();
	$archive_subtitle = get_the_archive_description();
}

if ( $archive_title || $archive_subtitle ) {
	?>

	<header>

		<?php if ( $archive_title ) { ?>
			<h1><?php echo wp_kses_post( $archive_title ); ?></h1>
		<?php } ?>

		<?php if ( $archive_subtitle ) { ?>
			<div><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
		<?php } ?>

	</header>

	<?php
}

if ( have_posts() ) {

	$i = 0;

	while ( have_posts() ) {
		$i++;
		if ( $i > 1 ) {
			echo '<hr aria-hidden="true" />';
		}
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );

	}
} elseif ( is_search() ) {
	?>

	<div>

		<?php
		get_search_form(
			array(
				'label' => __( 'search again' ),
			)
		);
		?>

	</div><!-- .no-search-results -->

	<?php
}
?>

<?php //get_template_part( 'template-parts/pagination' ); ?>

<?php
get_footer();
