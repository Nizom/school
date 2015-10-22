<?php get_header(); ?>
<div class="content-wrapper spec-wrapper">
	 <h1><?php the_title(); ?></h1>
	<div class="content">

<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>
	<?php
	 // echo do_shortcode('[contact-form-7 id="104" title="Задать вопрос" html_class="form spec"]');
	echo do_shortcode('[contact-form-7 id="63" title="Задать вопрос" html_class="form spec"]');
	?>
<!-- 	<div class="form spec">
	 	<form action="" id="contacts-form">
		 	<div class="form-wrap">
			 	<p class="form-title">Задать вопрос</p>
			 	<input type="text" class="form-input-text" placeholder="Ваше имя">
			 	<textarea name="message" id="" cols="30" rows="10" class="form-textarea" placeholder="Сообщение"></textarea>
			 	<input type="text" class="form-input-text" placeholder="Почта или телефон для ответа">
			 	<input type="submit" id="edit-submit" name="contacts-form" value="Отправить заявку" class="form-submit">
			</div>
		</form>
	 </div> -->
</div>
</div>
<?php get_footer(); ?>