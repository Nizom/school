<?php $specialization = new WP_Query( array( 'post_type' => 'specialization', 'posts_per_page' => 24 ) ); ?>
	<?php if (wpmd_is_notphone()or$_COOKIE["front"]) { ?>
		<div class="our-speciality">
			<p class="title-block">Наши специальности</p>
			<div class="quick-tabs">
				<ul class="quick-tabs-links">
					<li class="tab first active" data-tab="1"> <a href="#">Факультет менеджмента</a></li>
					<li class="tab second" data-tab="2"><a href="#">Факультет дизайна</a></li>
					<li class="tab third" data-tab="3"> <a href="#">Заочное обучение</a></li>
				</ul>
				<div id="tab_1" class="quick-tabs-container">
				<?php while ( $specialization->have_posts() ) : $specialization->the_post(); ?>
				<?php
				switch (get_post_meta(get_the_ID(), 'category', true)) {
				    case 1:
				     ?> 
				       <div class="quick-tabs-item">
						<a href="<?php the_permalink() ?>">
							<div class="qt-wrap">
							<div class="image-wrap">
								<img class="image show retina" src="<?php echo get_post_meta(get_the_ID(), 'image', true); ?>" alt="">
								<img class="image hover retina" src="<?php echo get_post_meta(get_the_ID(), 'image-hover', true); ?>" alt="">
							</div>
							<p><?php echo get_post_meta(get_the_ID(), 'front-title', true); ?> </p>
						</div>
						</a>

					</div>
					<?php
				        break;
				    case 2:
					    break;
				    case 3:
				    	break;
				}
				?>
				<?php endwhile; ?>
				</div>
				<div id="tab_2" class="quick-tabs-container">
					<?php while ( $specialization->have_posts() ) : $specialization->the_post(); ?>
					<?php
				switch (get_post_meta(get_the_ID(), 'category', true)) {
				    case 1:
					        break;
				    case 2:
				    			       ?> 
				       <div class="quick-tabs-item">
						<a href="<?php the_permalink() ?>">
							<div class="qt-wrap">
							<div class="image-wrap">
								<img class="image show retina" src="<?php echo get_post_meta(get_the_ID(), 'image', true); ?>" alt="">
								<img class="image hover retina" src="<?php echo get_post_meta(get_the_ID(), 'image-hover', true); ?>" alt="">
							</div>
							<p><?php echo get_post_meta(get_the_ID(), 'front-title', true); ?></p>
						</div>
						</a>

					</div>
					<?php
				        break;
				    case 3:
				        break;
				}
				?>
				<?php endwhile; ?>
				</div>
				<div id="tab_3" class="quick-tabs-container">
					<?php while ( $specialization->have_posts() ) : $specialization->the_post(); ?>
					<?php
				switch (get_post_meta(get_the_ID(), 'category', true)) {
				    case 1:
				        break;
				    case 2:
					        break;
				    case 3:
				    			       ?> 
				       <div class="quick-tabs-item">
						<a href="<?php the_permalink() ?>">
							<div class="qt-wrap">
							<div class="image-wrap">
								<img class="image show retina" src="<?php echo get_post_meta(get_the_ID(), 'image', true); ?>" alt="">
								<img class="image hover retina" src="<?php echo get_post_meta(get_the_ID(), 'image-hover', true); ?>" alt="">
							</div>
							<p><?php echo get_post_meta(get_the_ID(), 'front-title', true); ?></p>
						</div>
						</a>

					</div>
					<?php
				        break;
				}
				?>
				<?php endwhile; ?>
				</div>
			
			</div>
		</div>
	<?php } ?>
	<?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") { ?>
	
		<div class="our-speciality-phone">
			<p class="title-block">Наши специальности</p>
			<?php while ( $specialization->have_posts() ) : $specialization->the_post(); ?>
			<div class="quick-tabs-item">
				<a href="<?php the_permalink() ?>">
					<div class="qt-wrap">
					<div class="image-wrap">
						<img class="image show retina" src="<?php echo get_post_meta(get_the_ID(), 'image', true); ?>" alt="">
						<img class="image hover retina" src="<?php echo get_post_meta(get_the_ID(), 'image-hover', true); ?>" alt="">
					</div>
					<p><?php echo get_post_meta(get_the_ID(), 'front-title', true); ?></p>
				</div>
				</a>
			</div>
			<?php endwhile; ?>
		</div>
	
	<?php } ?>
<?php wp_reset_postdata(); ?>	
