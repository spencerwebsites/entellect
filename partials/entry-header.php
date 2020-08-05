<header>

<?php

if ( is_singular() ) {

    the_title( '<h1>', '</h1>' );

} elseif( is_404() ) {
?>

    <h1><?php _e( 'Page Not Found' ); ?></h1>

<?php
} else {

    the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
    
}

?>

</header>