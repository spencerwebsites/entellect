<?php

$args = array( 
    'post_type' => 'service',
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :

?>

    <section class="bg-white">

        <div class="mx-wrap px-10 pt-10 transform -translate-y-16 flex flex-wrap justify-evenly items-top bg-white gap-10">
    
        <?php while ( $the_query->have_posts() ) : $the_query->the_post() ?>

            <a href="<?php the_permalink() ?>" class="text-center flex-1 text-black hover:text-<?php the_field( 'color' ); ?> focus:text-<?php the_field( 'color' ); ?>">
                <div class="mb-3 text-<?php the_field( 'color' ); ?> bg-<?php the_field( 'color' ); ?>-lt h-20 w-20 mx-auto flex items-center justify-center rounded-full hover:bg-<?php the_field( 'color' ); ?> hover:text-<?php the_field( 'color' ); ?>-lt duration-300">
                    <i data-feather="<?php the_field( 'icon' ); ?>" class="mx-auto"></i>
                </div>
                <?php the_title('<h3 class="text-base leading-tight">', '</h3>'); ?>
            </a>

        <?php endwhile; ?>

        </div>

    </section>

<?php endif; wp_reset_query(); ?>