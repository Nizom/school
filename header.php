<!doctype html>
<html class="<?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") {echo "phone-wrap";} ?>">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (wpmd_is_notphone()or$_COOKIE["front"]) { ?>
	<div class="wrapper clearfix">
		
		<header class="main">
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
		<?php } ?>
		<?php if (wpmd_is_phone() and ($_COOKIE["front"])!="1") { ?>
		<div class="wrapper-for-menu">
		<div class="phone-menu">
			<ul>
				<li><a href="/">Главная</a></li>
				<li><a href="/about-school/">О школе</a></li>
				<li><a href="/contacts">Контакты</a></li>
			</ul>
		</div>
		<div class="wrap-phone">
		<header class="phone">
			<div class="header">
				<a class="logo" href="/"><img class="retina" src="<?=get_template_directory_uri()?>/images/logo-phone.png" alt=""></a>
				<p class="site-description">школа политики<br>и бизнеса</p>
				<div class="info">
					<p class="phones">+7 495 771-16-31, +7 495 988-01-81</p>
				</div>
				<a href="#" class="phone-header-button def"><img src="<?=get_template_directory_uri()?>/images/phone-header-button.png" alt=""></a>
			</div>
		</header>
		<?php } ?>