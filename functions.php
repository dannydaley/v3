<?php

function dannydaley_files() {

    wp_enqueue_script('font-awesome', '//kit.fontawesome.com/a7b4d738fb.js', array(), '1.0', true);
    //wp_enqueue_script('font-awesome', '//kit.fontawesome.com/a7b4d738fb.js')
    wp_enqueue_style('dannydaley_main_style', get_stylesheet_uri());
    //wp_enqueue_script('projects', get_theme_file_uri('scripts/projects.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'dannydaley_files');

function dannydaley_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'dannydaley_features');
?>