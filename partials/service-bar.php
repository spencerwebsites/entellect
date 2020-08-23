<?php

$args = array( 
    'post_type' => 'service',
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :

?>

    <section class="bg-white">

        <div class="mx-wrap -mb-10 px-5 pt-5 transform -translate-y-16 flex flex-wrap justify-evenly items-top bg-white">
    
        <?php while ( $the_query->have_posts() ) : $the_query->the_post() ?>

            <a href="<?php the_permalink() ?>" class="text-center flex-1 m-5 text-black hover:text-<?php the_field( 'color' ); ?> focus:text-<?php the_field( 'color' ); ?>" style="min-width: 250px;">
                <div class="mb-3 text-<?php the_field( 'color' ); ?> bg-<?php the_field( 'color' ); ?>-lt h-20 w-20 mx-auto flex items-center justify-center rounded-full hover:bg-<?php the_field( 'color' ); ?> hover:text-<?php the_field( 'color' ); ?>-lt duration-300">
                    <i data-feather="<?php the_field( 'icon' ); ?>" class="mx-auto"></i>
                </div>
                <?php the_title('<h3 class="text-base leading-tight mb-0">', '</h3>'); ?>
            </a>

        <?php endwhile; ?>

        </div>

    </section>

<?php endif; wp_reset_query(); ?>