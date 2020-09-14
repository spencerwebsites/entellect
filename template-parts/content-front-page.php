<article <?php post_class('home'); ?> id="post-<?php the_ID(); ?>">

    <header class="bg-blue -mx-wrap px-wrap min-h-screen-75 flex flex-col md:flex-row items-center py-24 md:pt-0 flex-wrap text-white">
        <div class="flex-1">
            <h2 class="text-3xl md:text-5xl mb-0"><?php the_title(); ?></h2>
            <?php if ( has_excerpt() ) { ?>
                <p class="text-lg md:text-2xl mt-4"><?php echo get_the_excerpt(); ?></p>
            <?php } ?>
        </div>
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="sm:w-3/4 md:w-1/2 py-10 flex justify-end">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="max-height: 500px;" />
        </div>
        <?php endif; ?>
    </header>
    
    <div class="-mx-wrap">
        <?php get_template_part( 'partials/service-bar' ); ?>
    </div>

    <?php if ( get_theme_mod( 'entellect_home_video_link' ) ) : ?>
    <div class="bg-blue -mx-wrap">

        <div class="max-w-5xl mx-auto">

            <div class="relative h-0 overflow-hidden max-w-full" style="padding-bottom: 56.25%;">

                <iframe src="<?php echo get_theme_mod( 'entellect_home_video_link' ); ?>" title="Entellect Featured Video" class="h-full w-full top-0 left-0 absolute"></iframe>

            </div>

        </div>

    </div>
    <?php endif; ?>
    
    <?php if ( !empty( get_the_content() ) ) : ?>
    <div class="entry-content py-20">
        <?php
        if ( is_search() || ! is_singular() ) {
            the_excerpt();
        } else {
            the_content( __( 'Continue reading' ) );
        }
        ?>
    </div>
    <?php endif; ?>

    <div class="bg-gray-100 -mx-wrap px-0 py-20">
        <h2 class="text-center mb-10 px-wrap font-bold">News &amp; Events</h2>

        <div class="flex flex-wrap justify-center">

            <?php

            $args = array( 
                'post_type' => 'event',
                'limit'     => 1,
            );

            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) :

				while ( $the_query->have_posts() ) : $the_query->the_post();
				
					get_template_part('partials/event', 'block');

				endwhile;
			
			endif;
			
			wp_reset_query();
			
			?>

        </div>

        <div class="flex items-center justify-center">
            <a href="<?php echo get_post_type_archive_link( 'event' ); ?>" class="text-base flex items-center justify-center mt-4 mx-auto font-bold hover:underline focus:underline">View More Events<i data-feather="arrow-right" class="ml-1" width="20" height="20"></i></a>
        </div>

    </div>

</article>