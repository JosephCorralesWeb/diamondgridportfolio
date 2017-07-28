<?php

if (!function_exists('diamondgridportfolio_setup')) :
    add_action('after_setup_theme', 'diamondgridportfolio_setup');
    function diamondgridportfolio_setup()
    {
        //Let WordPress manage the document title.
        add_theme_support('title-tag');

        //Add theme support for custom backgrounds
        add_theme_support('custom-background');

// This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'diamondgridportfolio'),
        ));
    }
endif; //end setup

// diamondgridportfolio_setup
add_action('after_setup_theme', 'diamondgridportfolio_setup');

//Enqueue scripts and styles.
function diamondgridportfolio_resources()
{

    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');

	wp_enqueue_style('diamonds', get_template_directory_uri() . '/css/diamonds.css');

    wp_enqueue_script('jq', get_template_directory_uri() . '/js/jquery.js');

    wp_enqueue_script('jquery-diamonds', get_template_directory_uri() . '/js/jquery.diamonds.js');

    wp_enqueue_script('diamonds', get_template_directory_uri() . '/js/diamonds.js');
}
add_action('wp_enqueue_scripts', 'diamondgridportfolio_resources');

//Add theme support for custom thumbnail sizes
add_theme_support('post-thumbnails');

//Set thumbnail sizes - Regen Thumbnails plugin required
add_image_size('grid', 300, 300, true);
add_image_size('post', 500, 500, true);

//Show date on posts
function diamondgridportfolio_posted_on()
{
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if (get_the_time('U') !== get_the_modified_time('U')) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }
    $time_string = sprintf($time_string,
        esc_attr(get_the_date('c')),
        esc_html(get_the_date()),
        esc_attr(get_the_modified_date('c')),
        esc_html(get_the_modified_date())
    );
    $posted_on = sprintf(
        esc_html_x('Posted on %s', 'post date', 'diamondgridportfolio'),
        '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
    );
    echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . '</span>';
}