<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<!-- <label class="screen-reader-text" for="s">Поиск: </label> -->
	<input type="text" class="search-field" placeholder="Поиск по сайту"value="<?php echo get_search_query() ?>" name="s" id="s" />
	<input style="display:none" type="submit" id="searchsubmit" value="найти" />
	<img src="<?=get_template_directory_uri()?>/images/search-form-icon.png" alt="">
</form>