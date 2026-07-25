<?php

function ryuhei_astra_child_enqueue_assets() {
    wp_enqueue_style(
        'ryuhei-astra-child-style',
        get_stylesheet_uri(),
        array('astra-theme-css'),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'ryuhei-astra-child-script',
        get_stylesheet_directory_uri() . '/script.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}

add_action('wp_enqueue_scripts', 'ryuhei_astra_child_enqueue_assets');