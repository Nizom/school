<?php /* Template Name: О школе */ ?>
<?php 
get_header();
?>
 <?php $staff = new WP_Query( array( 'post_type' => 'staff', 'posts_per_page' => 24 ) ); ?>
<div class="content-wrapper staff-wrapper">
	<div class="content">
	<h1>Преподаватели</h1>
		<div class="staff-wrap">

			 <?php while ( $staff->have_posts() ) : $staff->the_post(); ?>

			<div class="staff-item">
				<div class="image-wrap">
					<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
					<?php the_post_thumbnail(array( 234,124)); ?>
					<!-- <img src="<?php the_permalink(); ?>" alt="" class="staff-photo full-size"> -->
					<?php endif; ?>
				</div>
				<p class="staff-name"><?php the_title(); ?></p>
				<a href="<?php the_permalink() ?>" class="more">Подробнее</a>
			</div>	
			<!-- <div class="staff-item">
				<div class="image-wrap">
					<img src="/images/staff-image-1.png" alt="" class="staff-photo full-size">
				</div>
				<p class="staff-name">Васильев<br>Сергей Александрович</p>
				<a href="#more" class="more">Подробнее</a>
			</div>
			<div class="staff-item">
				<div class="image-wrap">
					<img src="/images/staff-image-1.png" alt="" class="staff-photo full-size">
				</div>
				<p class="staff-name">Васильев<br>Сергей Александрович</p>
				<a href="#more" class="more">Подробнее</a>
			</div>
			<div class="staff-item">
				<div class="image-wrap">
					<img src="/images/staff-image-1.png" alt="" class="staff-photo full-size">
				</div>
				<p class="staff-name">Васильев<br>Сергей Александрович</p>
				<a href="#more" class="more">Подробнее</a>
			</div>
			<div class="staff-item">
				<div class="image-wrap">
					<img src="/images/staff-image-1.png" alt="" class="staff-photo full-size">
				</div>
				<p class="staff-name">Васильев<br>Сергей Александрович</p>
				<a href="#more" class="more">Подробнее</a>
			</div>
			<div class="staff-item">
				<div class="image-wrap">
					<img src="/images/staff-image-1.png" alt="" class="staff-photo full-size">
				</div>
				<p class="staff-name">Васильев<br>Сергей Александрович</p>
				<a href="#more" class="more">Подробнее</a>
			</div>	 -->

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>	 

		</div>
	</div>
</div>
<?php 
get_footer();
?>