<?php
/**
 * Loyal Coder  functions.php and definitions
 *
 * @link https://loyalcoder.com
 *
 * @package WordPress
 * @subpackage loyalcoder
 * @since 1.0
 */

define('VERSION', 1.0);
define('LCIMAGE', get_template_directory_uri().'assets/img');

/**
 * Loyal Coder only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
    require get_template_directory() . '/lib/inc/back-compat.php';
    return;
}

function loyalcoder_setup() {

    load_theme_textdomain( 'loyalcoder' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );


    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(
        array(
            'top'    => __( 'Top Menu', 'loyalcoder' ),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support(
        'post-formats',
        array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'audio',
        )
    );

    // Add theme support for Custom Logo.
    add_theme_support(
        'custom-logo',
        array(
            'width'      => 250,
            'height'     => 250,
            'flex-width' => true,
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'editor-styles' );

    // Load default block styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for responsive embeds.
    add_theme_support( 'responsive-embeds' );

    //  Add image site

    add_image_size('post_thum', 290, 190, true);

}
add_action( 'after_setup_theme', 'loyalcoder_setup' );

// required file include

require_once 'lib/init.php';

function twentynineteen_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );