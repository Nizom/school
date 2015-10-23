<?php $slider = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => 24 ) ); ?>

<div class="slider fotorama"
data-width="852px"
data-height="418px"
>
<?php while ( $slider->have_posts() ) : $slider->the_post(); ?>
	<div data-maxwidth="852px" data-maxheight="418px">
		 <!-- <?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?> -->

		<img src=" <?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ?>" alt="" class="slider-image">
		<p class="slider-text"><?php the_title(); ?></p>
		<p class="slider-date"><?php echo get_post_meta(get_the_ID(), 'date', true); ?></p>
	</div>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>	
</div>