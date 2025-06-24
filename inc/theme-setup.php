<?php
function news_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    register_nav_menus([
        'main_menu' => 'Main Menu',
    ]);
}
add_action('after_setup_theme', 'news_theme_setup');
