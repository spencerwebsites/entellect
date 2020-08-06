<header>

<?php if ( is_singular() ) { ?>

    <div>

<?php the_title( '<h1>', '</h1>' ); ?>
    </div>


<?php } elseif( is_404() ) { ?>

    <h1><?php _e( 'Page Not Found' ); ?></h1>

<?php
} else {

    the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
    
}

?>

</header>