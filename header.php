<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name='viewport' content='width=device-width,initial-scale=1'/>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>
<body>
    <div id="scroll"></div>
	<header class="header">
		<div class="overlay"></div>
		<div class="header__block">
			<div class="header__block-logo">
				<div class="burger">
					<img src="<?php echo get_template_directory_uri() ?>/img/burger.svg" alt="Burger icon">
				</div>
				<a href="/" class="logo" aria-label="Logo">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo-mobile.svg" class="logo__mobile" alt="Adveplay logo">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logo__desktop" alt="Adveplay logo">
				</a>
			</div>
			<div class="header__block-menu">
				<a href="#about" class="menu-item">About us</a>
				<a href="#why" class="menu-item">Why we</a>
				<span></span>
				<a href="#services" class="menu-item">Services</a>
				<a href="#clients" class="menu-item">Clients</a>
			</div>
			<div class="header__block-btn">
				<a href="#contact" class="btn">Contact us</a>
				<!--<div class="lang_choose">
					<div class="choose">
						<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/08/en-flag.svg" alt="GB">
					</div>
				</div>-->
			</div>
			<div class="menu_mobile">
				<div class="close">
					<img src="<?php echo get_template_directory_uri() ?>/img/close.svg" alt="Close icon">
				</div>
				<div class="menu">
					<a href="#about" class="menu-item">About us</a>
					<a href="#why" class="menu-item">Why we</a>
					<a href="#services" class="menu-item">Services</a>
					<a href="#clients" class="menu-item">Clients</a>
					<a href="#contact" class="menu-item">Contact us</a>
				</div>
			</div>
		</div>
	</header>