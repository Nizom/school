<?php
get_header();
?>
<div class="content-wrapper front">
	<div class="content">
		<?php echo do_shortcode('[slider]'); ?>
		<?php echo do_shortcode('[specialization_front]'); ?>
	</div>
	<?php 
	get_sidebar();
	 ?>
	 <?php 
	 // echo do_shortcode('[contact-form-7 id="100" title="Заявка на обучение" html_class="form zayavka"]');
	 echo do_shortcode('[contact-form-7 id="62" title="Заявка на обучение" html_class="form zayavka"]');
	 ?>
</div>
<?php
get_footer();
?>