<?php
require get_template_directory() . '/include/setup.php';

add_action('wp_enqueue_scripts', 'mb_theme_styles');
add_action('after_setup_theme', 'mb_after_setup');










// Headers, Footers e BodyClass