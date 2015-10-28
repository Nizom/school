		<footer>
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
		<?php
			echo do_shortcode('[contact-form-7 id="68" title="Задать вопрос" html_class="form contacts popup"]');
			// echo do_shortcode('[contact-form-7 id="106" title="Задать вопрос" html_class="form contacts popup"]');
		?>
	</div>
	<?php wp_footer(); ?>
</body>
</html>