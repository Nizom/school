<?php /* Template Name: Слайдер */ ?>
<?php 
get_header();
?>
 <?php $slider = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => 24 ) ); ?>



<div class="content-wrapper staff-wrapper">
	<div class="content">
	<h1>Преподаватели</h1>
		<div class="staff-wrap">

			 <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>

			<div class="staff-item">
				<div class="image-wrap">
					<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
					<?php the_post_thumbnail(array( 234,124)); ?>
					
					<!-- <img src="<?php the_permalink(); ?>" alt="" class="staff-photo full-size"> -->
					<?php endif; ?>
				</div>
				<p class="slider-name"><?php echo get_post_meta($post->ID, 'date', true); ?></p>
				<a href="<?php the_permalink() ?>" class="more">Подробнее</a>
			</div>	

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>	 

		</div>
	</div>
</div>
<?php 
get_footer();
?>