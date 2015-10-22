<?php /* Template Name: Специальности */ ?>
<?php 
get_header();
?>
 <?php $specialization = new WP_Query( array( 'post_type' => 'specialization', 'posts_per_page' => 24 ) ); ?>
<div class="content-wrapper specialization-wrapper">
	<div class="content">
	<h1>Специальности</h1>
		<div class="specialization-wrap">

			 <?php while ( $specialization->have_posts() ) : $specialization->the_post(); ?>

			<div class="specialization-item">
				<p class="specialization-name"><?php the_title(); ?></p>
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