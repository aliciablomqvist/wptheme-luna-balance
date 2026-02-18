<?php

function luna_register_all_patterns()
{
    $patterns = array(
        'header' => 'Header Navigation',
        'hero' => 'Hero Section',
        'philosophy' => 'Philosophy Section',
        'classes' => 'Classes Grid',
        'events' => 'Events Section',
        'social' => 'Social Links',
        'footer' => 'Footer',
    );

    foreach ($patterns as $slug => $title) {
        $file = get_template_directory() . '/patterns/' . $slug . '.php';

        if (file_exists($file)) {
            $pattern_data = include $file;
            register_block_pattern('luna/' . $slug, $pattern_data);
        }
    }
}
add_action('init', 'luna_register_all_patterns');

function luna_enqueue_assets()
{
    wp_enqueue_style(
        'luna-animations',
        get_template_directory_uri() . '/assets/css/animations.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'luna-animations-js',
        get_template_directory_uri() . '/assets/js/animations.js',
        array(),
        '1.0.0',
        true
    );

    wp_enqueue_style(
        'luna-mobile-overrides',
        get_template_directory_uri() . '/assets/css/mobile.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'luna_enqueue_assets');

function luna_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'luna'),
    ));
}
add_action('after_setup_theme', 'luna_register_menus');

add_filter('jpeg_quality', fn() => 100);
add_filter('wp_editor_set_quality', fn() => 100);

add_action('wp_enqueue_scripts', function () {
    wp_add_inline_script(
        'wp-blocks',
        'document.documentElement.style.scrollBehavior = "smooth";'
    );
});
