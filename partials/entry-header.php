<?php if ( is_singular() ) { ?>

    <?php
        $classes = '';

        get_field('color') ? $classes .= 'bg-' . get_field( 'color' ) : $classes .= 'bg-blue';
    ?>

    <header class="-mx-wrap px-wrap py-20 min-h-screen-50 <?php echo $classes; ?> flex items-center justify-center relative">

        <?php if ( has_post_thumbnail() ) { ?>
		
			<div class="featured-image z-0 absolute top-0 bottom-0 left-0 right-0 w-full h-full bg-center bg-cover" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>
			
            <div aria-hidden="true" class="image-overlay <?php echo $classes; ?> absolute z-10 top-0 left-0 right-0 bottom-0 w-full h-full"></div>

        <?php } ?>

        <div class="text-center text-white">
            <?php the_title('<h1 class="uppercase text-white text-4xl text-center relative z-10 mb-0 md:text-5xl">', '</h1>'); ?>

            <?php if ( has_excerpt() ) echo '<p class="text-2xl mt-4">' . get_the_excerpt() . '</p>'?>
        </div>

    </header>

<?php } elseif( is_404() ) { ?>

    <header class="-mx-wrap px-wrap py-20 <?php get_field('field_name') ? 'bg-' . the_field( 'color' ) : 'bg-blue' ?> flex items-center justify-center min-h-screen-75 bg-center bg-cover relative" style="background-image: url('<?php if ( has_post_thumbnail() ) echo the_post_thumbnail_url(); ?>'); background-blend-mode: multiply;">

        <?php if ( has_post_thumbnail() ) { ?>
        
            <div aria-hidden="true" class="image-overlay <?php get_field('field_name') ? 'bg-' . the_field( 'color' ) : 'bg-blue' ?> absolute z-0 top-0 left-0 right-0 bottom-0 w-full h-full"></div>

        <?php } ?>

        <h1 class="uppercase text-white text-4xl text-center relative z-10 md:text-5xl"><?php _e( 'Page Not Found' ); ?></h1>

    </header>

<?php

} else {

    the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
    
}

?>