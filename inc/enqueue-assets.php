<?php
function news_enqueue_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'news_enqueue_scripts');
