<?php

function mb_theme_styles() {
    wp_enqueue_style('theme_css', get_template_directory_uri() . '/assets/css/theme.css');
    wp_enqueue_style('reset_css', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('google_roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    wp_enqueue_style('owl_carousel_css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('theme_owl_carousel_css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');

    
    wp_enqueue_script('theme_js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script('setup_js', get_template_directory_uri() . '/assets/js/setup.js');


}

function mb_after_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', __('Primary Menu', 'blogdataverna'));
}
