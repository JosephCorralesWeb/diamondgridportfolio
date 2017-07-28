<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="background-image"></div>
<div id="container">
<header class="masthead">
        <div id="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><span id="twenty">TWENTY</span>FORTY</a>
        </div>
    <div id="site-description"><?php bloginfo('description'); ?></div>
    <nav>
    <?php if(is_front_page() or is_single()) : ?>
            <?php wp_nav_menu(array('theme_location' => 'Primary Menu', 'menu_id' => 'primary-menu')); ?>
        </nav>
    <?php endif; ?>
</header>