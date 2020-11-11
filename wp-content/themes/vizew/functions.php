<?php

function name_public () {
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
    wp_enqueue_script('jquery', get_theme_file_uri('js/jquery/jquery-2.2.4.min.js'), NULL, '1.0', true);
    wp_enqueue_script('bootstrap-popper', get_theme_file_uri('js/bootstrap/popper.min.js'), NULL, '1.0', true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('js/bootstrap/bootstrap.min.js'), NULL, '1.0', true);
    wp_enqueue_script('plugin', get_theme_file_uri('js/plugins/plugins.js'), NULL, '1.0', true);
    wp_enqueue_script('active', get_theme_file_uri('js/active.js'), NULL, '1.0', true);
}

function name_info() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('wp_enqueue_scripts', 'name_public');
add_action('after_setup_theme', 'name_info');