<article <?php post_class(''); ?> id="post-<?php the_ID(); ?>">

    <?php
       
    ?>

    <header class="-mx-wrap px-wrap py-20 bg-<?php the_field( 'color' ); ?> flex items-center justify-center min-h-screen-75 bg-center bg-cover relative" style="background-image: url('<?php if ( has_post_thumbnail() ) echo the_post_thumbnail_url(); ?>'); background-blend-mode: multiply;">

        <?php if ( has_post_thumbnail() ) { ?>
        
            <div aria-hidden="true" class="image-overlay bg-<?php the_field( 'color' ); ?> absolute z-0 top-0 left-0 right-0 bottom-0 w-full h-full"></div>

        <?php } ?>

        <?php the_title('<h1 class="uppercase text-white text-4xl text-center relative z-10 md:text-5xl">', '</h1>'); ?>

    </header>

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