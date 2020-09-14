<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php get_template_part( 'partials/entry-header' ); ?>

    <div class="entry-content pt-20 news-events">
		<?php the_content( __( 'Continue reading' ) ); ?>
		<section class="bg-gray-lt -mx-wrap px-wrap w-screen max-w-screen pt-10">
			<?php
				$args = array(  
					'post_type' => 'event',
					'post_status' => 'publish',
					'posts_per_page' => 5,
					'meta_key'			=> 'event_date',
					'orderby'			=> 'meta_value',
					'order'				=> 'DESC'
				);
			
				$loop = new WP_Query( $args ); 
					
				while ( $loop->have_posts() ) : $loop->the_post();

					$end_date_passed_check = DateTime::createFromFormat( 'F j, Y', get_field( 'event_date' ) );
					$date_passed = null;
					if ( $end_date_passed_check->format('Ymd') < date('Ymd') ) {
						$date_passed = 'opacity-50';
					}
					?>
					<div class="event-item flex flex-col md:flex-row mb-8 last:mb-0 mx-auto max-w-container min-h-screen-25 <?php echo $date_passed; ?>">
						<?php if (has_post_thumbnail()) : ?>
							<div class="flex-1 bg-cover min-h-screen-25 min-h-none bg-center" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>
						<?php endif; ?>
						<div class="flex-1 p-6 bg-white flex flex-col justify-center">
							<h3 class="mt-0 mb-2"><?php the_title(); ?></h3>
							<p class="font-bold text-sm"><?php the_field( 'event_date' ); ?></p>
							<div class="text-base event-text"><?php the_content(); ?></div>
							<?php if ( get_field('event_link' ) ) : ?>

								<a href="<?php echo the_field( 'event_link' ); ?>" target="_blank" class="text-base mt-6 ">Learn More</a>

							<?php endif; ?>
						</div>
					</div>
					<?php
				endwhile;
			?>
		</section>
    </div>

</article>