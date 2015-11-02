<?php $specialization = new WP_Query( array( 'post_type' => 'specialization', 'posts_per_page' => 24 ) ); ?>
	<div class="spec-menu">
		<div class="form-wrap">
			<p class="title">Очное отделение</p>
			<?php while ( $specialization->have_posts() ) : $specialization->the_post(); ?>
				<?php if ((get_post_meta(get_the_ID(), 'form', true))==1) {?>
				<div class="spec-link"><a href="<?php the_permalink() ?>"><?php echo get_post_meta(get_the_ID(), 'front-title', true); ?></a></div>
				<?php } ?>
			<?php endwhile;?>
		</div>
		<div class="absolute-magic">
		</div>
		<div class="form-wrap right">
			<p class="title">Заочное отделение</p>
			<?php while ( $specialization->have_posts() ) : $specialization->the_post(); ?>
				<?php if ((get_post_meta(get_the_ID(), 'form', true))==2) {?>
				<div class="spec-link"><a href="<?php the_permalink() ?>"><?php echo get_post_meta(get_the_ID(), 'front-title', true); ?></a></div>
				<?php } ?>
			<?php endwhile;?>
		</div>
		<?php wp_reset_postdata(); ?>	
	</div>