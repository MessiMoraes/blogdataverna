<?php

function mb_theme_styles() {
    wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/theme.css');
    wp_enqueue_style('reset_css', get_template_directory_uri() . '/assets/css/reset.css');
    
    wp_enqueue_script('theme_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
}

function mb_after_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', __('Primary Menu', 'blogdataverna'));
}
