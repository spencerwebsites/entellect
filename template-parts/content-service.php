<article <?php post_class(''); ?> id="post-<?php the_ID(); ?>">

    <header class="-mx-wrap px-wrap py-20 bg-<?php the_field( 'color' ); ?> flex items-center justify-center min-h-screen-75">

        <?php the_title('<h1 class="uppercase text-white text-4xl text-center md:text-5xl">', '</h1>'); ?>

    </header>

    <div class="px-wrap py-20">
        <?php
        if ( is_search() || ! is_singular() ) {
            the_excerpt();
        } else {
            the_content( __( 'Continue reading' ) );
        }
        ?>
    </div>

</article>