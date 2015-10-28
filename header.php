<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper clearfix">
		<header>
			<div class="header">
				<a class="logo" href="/"><img class="retina" src="<?=get_template_directory_uri()?>/images/logo.png" alt=""></a>
				<p class="site-description">школа политики и бизнеса</p>
				<div class="info">
					<p class="phones">8 (495) 771-16-31, 8 (495) 988-01-81</p>
					<p class="worktime">с 10:00 до 21:00, Воскресение — выходной</p>
				</div>
				<div class="make-order"><a href="#front-form" class="order">Сделать заявку</a></div>
					<?php wp_nav_menu( array( 'theme_location' => 'header_menu','container' => 'nav', 'container_class' => 'navigation') );?>
					<?php echo do_shortcode('[specialization_header_menu]'); ?>
			</div>

		</header>
