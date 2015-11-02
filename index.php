<?php
get_header();
?>
<?php if (wpmd_is_notphone()or$_COOKIE["front"]) { ?>
<div class="content-wrapper front <?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") {echo "phone";} ?>">
	<div class="content">
		<?php echo do_shortcode('[slider]'); ?>
		<?php echo do_shortcode('[specialization_front]'); ?>
	</div>
	<?php 
	get_sidebar();
	 ?>
	 <?php 
	 echo do_shortcode('[contact-form-7 id="100" title="Заявка на обучение" html_class="form zayavka"]');
	 // echo do_shortcode('[contact-form-7 id="62" title="Заявка на обучение" html_class="form zayavka"]');
	 ?>
</div>
<?php } ?>
<?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") { ?>
	<?php echo do_shortcode('[specialization_front]'); ?>
	<p class="backcall-title">Обратный звонок</p>
<?php } ?>
<?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") { ?>
	 <?php 
	 echo do_shortcode('[contact-form-7 id="143" html_class="form phone"]');
	 ?>
<?php } ?>
<?php
get_footer();
?>
