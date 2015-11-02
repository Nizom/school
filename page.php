<?php get_header(); ?>
<div class="content-wrapper <?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") {echo "phone";} ?>">
	<h1><?php the_title(); ?></h1>
	<div class="content">
		<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>
	</div>
</div>
<?php get_footer(); ?>