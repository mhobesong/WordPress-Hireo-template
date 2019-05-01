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
    wp_enqueue_style("fontawesome_css", '//use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style("custom_css", '/wp-content/themes/hireo/css/custom.css');
    wp_enqueue_style('slider_css', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/css/bootstrap-slider.min.css');
    wp_enqueue_style('bootstrap_select_map', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js.map');
    wp_enqueue_style('bootstrap_select_css', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css');
    wp_enqueue_style('simplescroll_css', '//cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css');
    wp_enqueue_script('jquery_js', '/wp-content/themes/hireo/js/jquery-1.12.4.min.js',[] , '3.4.1', true);
    wp_enqueue_script('bootstrap_js', '/wp-content/themes/hireo/js/bootstrap.min.js',[] , '3.4.1', true);
    wp_enqueue_script('popper_js', '//unpkg.com/popper.js@1',[],NULL,true);
    wp_enqueue_script('tippy_js', '//unpkg.com/tippy.js@4',[], NULL, true);
    wp_enqueue_script('slider_js', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/bootstrap-slider.min.js', [], NULL, false);
    wp_enqueue_script('bootstrap_select_js', '//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.js',[],NULL, true);
    wp_enqueue_script('simplescroll_js', '//cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js', []. NULL, false);

}

