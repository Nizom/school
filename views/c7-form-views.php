<?php $specialization = new WP_Query( array( 'post_type' => 'specialization') ); ?>
<select name="magic-select" id="magic-select" class="magic-select form-input-select">
	<option disabled selected value="Выберите специальность">Выберите специальность</option>
	<?php while ( $specialization->have_posts() ) : $specialization->the_post(); ?>
	<option value="<?php echo get_post_meta(get_the_ID(), 'front-title', true); ?>"><?php echo get_post_meta(get_the_ID(), 'front-title', true); ?></option>
	<?php endwhile;?>
</select>
<?php wp_reset_postdata(); ?>	