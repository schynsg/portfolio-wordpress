<?php
function test_files() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
function setup_features() {
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Principal menu');
}

function post_types() {
    register_post_type('about', array(
        'public' => true,
        'labels' => array(
            'name' => 'About',
            'add_new_item' => 'Add new infos',
            'edit_item' => 'Edit infos',
        ),
        'menu_icon' => 'dashicons-universal-access-alt',
    ));
    register_post_type('projects', array(
        'public' => true,
        'labels' => array(
            'name' => 'Projects',
            'add_new_item' => 'Add new project',
            'edit_item' => 'Edit project',
        ),
        'menu_icon' => 'dashicons-desktop',
    ));
}

add_action('wp_enqueue_scripts', 'test_files');
add_action('after_setup_theme', 'setup_features');

add_action('init', 'post_types');