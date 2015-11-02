<div class="contacts-wrapper <?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") {echo "phone";} ?>">
    <div id="map" class="ya-map"></div>
	<div class="content">
		<div class="contacts">
			<div class="item">
				<p class="title">Адрес</p>
				<p class="text">м. «Красные ворота» или м. «Комсомольская», 1-й Басманный переулок, дом 3<br>Здание «Институт Мировых Цивилизаций», на территории Института<br>2-ой корпус («НОВЫЙ»), 5 этаж, кабинет 506</p>
			</div>
			<div class="item">
				<p class="title">Телефон и почта</p>
				<p class="text">Телефоны: 8 (495) 771-16-31, 8 (495) 509-35-61, 8 (495) 988-01-81<br><span>Прием звонков осуществляется ежедневно с 10:00 до 21:00, Воскресенье — выходной</span><br><br>E-mail: mka9@yandex.ru</p>
			</div>
			<div class="item">
				<p class="title">Приемная комиссия</p>
				<p class="text">Часы работы: ежедневно с понедельника по пятницу с 10.00 до 20.00,<br>в субботу с 10:00 до 15:00,  Воскресенье – выходной
				<br><br>Перед приездом необходимо позвонить и записаться</p>
			</div>
		</div>
	</div>
	<?php
	if (wpmd_is_notphone()or$_COOKIE["front"]) {
	echo do_shortcode('[contact-form-7 id="101" title="Задать вопрос" html_class="form contacts"]');
	}
	// echo do_shortcode('[contact-form-7 id="64" title="Задать вопрос" html_class="form contacts"]');
	?>
	<?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") {  
	 echo do_shortcode('[contact-form-7 id="143" html_class="form phone"]');
	 }?>
</div>