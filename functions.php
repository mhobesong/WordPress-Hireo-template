<?php
/**
 * Enable custom logo support
 */
add_theme_support( 'custom-logo', ['height'=>42]);

add_action('wp_enqueue_scripts', 'site_scripts');

/**
 * Load site css and js files
 */
function site_scripts()
{
    wp_enqueue_style("bootstrap_css", '/wp-content/themes/hireo/css/bootstrap.min.css');
    wp_enqueue_style("custom_css", '/wp-content/themes/hireo/css/custom.css');
    wp_enqueue_script('jquery_js', '/wp-content/themes/hireo/js/jquery-1.12.4.min.js',[] , '3.4.1', true);
    wp_enqueue_script('bootstrap_js', '/wp-content/themes/hireo/js/bootstrap.min.js',[] , '3.4.1', true);
    wp_enqueue_script('popper_js', '//unpkg.com/popper.js@1',[],NULL,false);
    wp_enqueue_script('tippy_js', '//unpkg.com/tippy.js@4',[], NULL, false);

}

