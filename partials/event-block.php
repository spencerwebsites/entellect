<a href="<?php the_permalink() ?>" class="bg-gray-300 m-5 text-black block max-w-sm px-4 pb-4 hover:bg-gray-400 focus:bg-gray-400 duration-300 w-full flex flex-col justify-end">

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="bg-cover bg-center -mx-4" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');height: 250px;"></div>
	<?php endif; ?>
	
	<?php the_title('<h4 class="font-bold pt-4 font-body text-xl mb-0">', '</h4>'); ?>
	<span class="block text-sm font-bold mb-0"><?php the_field( 'event_date' ); ?></span>
	<?php has_excerpt() && the_excerpt('<p class="mt-4">', '</p>'); ?>
</a>