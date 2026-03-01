<?php

function devtheme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}

add_action('after_setup_theme', 'devtheme_setup');


function devtheme_enqueue_assets() {

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'devtheme-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        $version
    );

    wp_enqueue_script(
        'devtheme-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $version,
        true
    );
}

add_action('wp_enqueue_scripts', 'devtheme_enqueue_assets');