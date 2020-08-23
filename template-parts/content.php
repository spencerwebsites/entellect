<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php get_template_part( 'partials/entry-header' ); ?>

    <div class="entry-content pt-20">
        <?php
        if ( is_search() || ! is_singular() ) {
            the_excerpt();
        } else {
            the_content( __( 'Continue reading' ) );
        }
        ?>
    </div>

</article>