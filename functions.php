<?php

function brutality_load_styles() {
    wp_enqueue_style('main_styles', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}

add_action('wp_enqueue_scripts', 'brutality_load_styles');