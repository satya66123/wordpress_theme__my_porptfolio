<?php
function satya_portfolio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'satya_portfolio_setup');

function satya_portfolio_scripts() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'satya_portfolio_scripts');
