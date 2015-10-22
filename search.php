<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="content-wrapper staff-wrapper">
	 <h1>Страница поиска</h1>
	<div class="content">
</div>
<section>
	<h2 class="content-heading"><?php printf( __('Результат поиска для: %s', 'default'), get_search_query() ); ?></h2>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p><?php the_excerpt(); ?></p>
	<?php endwhile;	else:?>
		<p><?php echo __('Извените, но поиск не дал реультатов', 'wp_theme'); ?></p>
	<?php endif; ?>
</section>
</div>
</div>
<?php get_footer(); ?>