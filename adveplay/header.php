<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Montserrat-Light.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Montserrat-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Montserrat-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Montserrat-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>
<body>
    <header class="header">
        <div class="container-header">
            <div class="header-block">
                <a href="/" aria-label="Logo">
                    <img width="190" height="31" src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Adveplay logo">
                </a>
                <div class="header-menu">
                    <a class="header-menu_link" href="#about">About</a>
                    <a class="header-menu_link" href="#what_we_do">What We Do</a>
                    <a class="contact-us" href="mailto:info@adveplay.com">Contact Us</a>
                </div>
            </div>
        </div>
    </header>
