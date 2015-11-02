		<?php if (wpmd_is_notphone()or$_COOKIE["front"]) { ?>
		<footer class="main">
			
			<div class="footer-wrap">
				<div class="footer">

					<a class="logo" href="/"><img class="retina" src="<?=get_template_directory_uri()?>/images/logo.png" alt=""></a>
					<div class="info">
						<p class="phones">8 (495) 771-16-31, 8 (495) 988-01-81</p>
						<p class="worktime">с 10:00 до 21:00, Воскресение — выходной</p>
					</div>
					<?php get_search_form(); ?><!-- <input type="search" class="search-field" placeholder="Поиск по сайту"> -->
					
				</div>
			</div>
		</footer>
	</div>
		<?php } ?>
		<?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") { ?>
		<footer class="phone">
			
			<div class="footer-wrap">
				<div class="footer">

					<a class="logo" href="/"><img class="retina" src="<?=get_template_directory_uri()?>/images/logo-phone.png" alt=""></a>
					<p class="site-description">школа политики<br>и бизнеса</p>
					<a class="full-link" href="/?code=1">Полная версия сайта</a>
				</div>
			</div>
		</footer>
		</div>
		</div>
		<?php } ?>
		<?php
		if (wpmd_is_notphone()) { 
			// echo do_shortcode('[contact-form-7 id="68" title="Задать вопрос" html_class="form contacts popup"]');
			echo do_shortcode('[contact-form-7 id="106" title="Задать вопрос" html_class="form popup"]');
		}
		?>

	<?php wp_footer(); ?>
</body>
</html>