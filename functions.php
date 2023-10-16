<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */
if (!function_exists('iz_viola_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function iz_viola_setup()
    {
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 1200);
        add_theme_support('wp-block-styles');
        add_theme_support('editor-styles');
        add_theme_support('responsive-embeds');
        add_theme_support('experimental-link-color');
        add_theme_support('custom-units');
    }
}
add_action('after_setup_theme', 'iz_viola_setup');

if (!function_exists('iz_viola_styles')) {
    /**
     * Enqueue front end styles.
     */
    function iz_viola_styles()
    {
        // Enqueue theme stylesheet
        wp_enqueue_style(
            'iz-viola-stylesheet',
            get_template_directory_uri() . '/style.css',
            array(),
            filemtime(get_template_directory() . '/style.css')
        );
    }
}
add_action('wp_enqueue_scripts', 'iz_viola_styles');

if (!function_exists('iz_viola_block_styles')) {
    /**
     * Enqueue common (front end and block editor) styles.
     */
    function iz_viola_block_styles()
    {
        // Enqueue theme stylesheet
        wp_enqueue_style(
            'iz-viola-block-stylesheet',
            get_template_directory_uri() . '/assets/styles/block-styles.css',
            array(),
            filemtime(get_template_directory() . '/assets/styles/block-styles.css')
        );
    }
}
add_action('enqueue_block_assets', 'iz_viola_block_styles');

if (!function_exists('iz_custom_burger_svg_icon')) {
    /**
     * Replace default svg manu icon
     */
    function iz_custom_burger_svg_icon(string $block_content, array $block)
    {
        if ($block['blockName'] === 'core/navigation' && !is_admin() && !wp_is_json_request()) {
            $svg = '<svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 5H32V9H4V5ZM4 16H32V20H4V16ZM4 27H32V31H4V27Z" fill="#09121F"/></svg>';

            return preg_replace('/\<svg width(.*?)\<\/svg\>/', $svg, $block_content);
        }

        return $block_content;
    }
}

add_filter('render_block', 'iz_custom_burger_svg_icon', null, 2);