<?php get_header(); ?>
<?php if (wpmd_is_notphone()or$_COOKIE["front"]) { ?>
	<div class="content-wrapper spec-wrapper">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
		 <h1><?php the_title(); ?></h1>
		 <p class="course-time"><?php echo get_post_meta(get_the_ID(), 'hours', true); ?></p>

		<div class="spec-diplom">
			<div class="diplom-block">
				<img class="diplom alignnone wp-image-22 size-medium" src="/wp-content/themes/wp_theme/images/diplom-image.png" alt="diplom-image"/>
				<p class="blue-title">Диплом</p>
				<p class="spec-text">Выпускники школы получают
				диплом государственного образца</p>

			</div>
			<div class="cost-block">
				<p class="cost"><?php echo get_post_meta(get_the_ID(), 'cost', true); ?> р.</p>
				<p class="cost-title">Стоимость</p>
				<p class="spec-text">За весь курс, в стоимость входят
				раздаточные материалы</p>

			</div>
			<div class="employment-block">
				<img class="spec alignnone wp-image-94 size-full" src="/wp-content/themes/wp_theme/images/spec-image.png" alt="spec-image"/>
				<p class="blue-title">Трудоустройство</p>
				<p class="spec-text">После обучения студенты по желанию
				распределяются на стажировку</p>

			</div>
		</div>
		<div class="content">
		<?php the_content(); ?>
		<div class="quick-tabs">
			<ul class="quick-tabs-links">
				<li class="tab first active" data-tab="1"><a href="#">Документы для поступления</a></li>
				<li class="tab second" data-tab="2"><a href="#">Адрес приемной комиссии</a></li>
			</ul>
			<div id="tab_1" class="quick-tabs-container first">
				<p class="documents">
				-2 фото 3*4 цветный<br>
				-Ксерокопия паспорта с пропиской (регистрацией)<br>
				-Ксерокопия диплома (среднее, профессиональное, высшее)</p>
			</div>
			<div id="tab_2" class="quick-tabs-container first">
				<p class="documents">
					м. «Красные ворота» или м. «Комсомольская», 1-й Басманный переулок, дом 3<br>Здание «Институт Мировых Цивилизаций», на территории Института<br>2-ой корпус («НОВЫЙ»), 5 этаж, кабинет 506
				</p>
			</div>	
		</div>
<?php endwhile; endif; ?>
		<?php
		echo do_shortcode('[contact-form-7 id="104" title="Задать вопрос" html_class="form spec"]');
		// echo do_shortcode('[contact-form-7 id="63" title="Задать вопрос" html_class="form spec"]');
		?>
	</div>
	</div>
<?php } ?>
<?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") { ?>
<div class="content-wrapper spec-wrapper phone">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
		 <h1><?php the_title(); ?></h1>
		 <p class="course-time"><?php echo get_post_meta(get_the_ID(), 'hours', true); ?></p>

		<div class="spec-diplom">
			<div class="diplom-block">
				<img class="diplom alignnone wp-image-22 size-medium" src="/wp-content/themes/wp_theme/images/diplom-image-phone.png" alt="diplom-image"/>
				<p class="blue-title">Диплом</p>
				<p class="spec-text">Выпускники школы получают
				диплом государственного образца</p>

			</div>
			<div class="cost-block">
				<p class="cost"><?php echo get_post_meta(get_the_ID(), 'cost', true); ?> р.</p>
				<p class="cost-title">Стоимость</p>
				<p class="spec-text">За весь курс, в стоимость входят
				раздаточные материалы</p>

			</div>
			<div class="employment-block">
				<img class="spec alignnone wp-image-94 size-full" src="/wp-content/themes/wp_theme/images/spec-image-phone.png" alt="spec-image"/>
				<p class="blue-title">Трудоустройство</p>
				<p class="spec-text">После обучения студенты по желанию
				распределяются на стажировку</p>

			</div>
		</div>
		<div class="content">
		<?php the_content(); ?>
		<div class="quick-tabs">
			<ul class="quick-tabs-links">
				<li class="tab first active" data-tab="1"><a href="#">Документы для поступления</a></li>
				<li class="tab second" data-tab="2"><a href="#">Адрес приемной комиссии</a></li>
			</ul>
			<div id="tab_1" class="quick-tabs-container first">
				<p class="documents">
				-2 фото 3*4 цветный<br>
				-Ксерокопия паспорта с пропиской (регистрацией)<br>
				-Ксерокопия диплома (среднее, профессиональное, высшее)</p>
			</div>
			<div id="tab_2" class="quick-tabs-container first">
				<p class="documents">
					м. «Красные ворота» или м. «Комсомольская», 1-й Басманный переулок, дом 3<br>Здание «Институт Мировых Цивилизаций», на территории Института<br>2-ой корпус («НОВЫЙ»), 5 этаж, кабинет 506
				</p>
			</div>	
		</div>
<?php endwhile; endif; ?>
	</div>
	</div>
<?php } ?>
<?php get_footer(); ?>