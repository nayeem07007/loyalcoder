<?php
/**
 * Loyalcoder back compat functionality
 */


function loyalcoder_switch_theme() {
    switch_theme( WP_DEFAULT_THEME );
    unset( $_GET['activated'] );
    add_action( 'admin_notices', 'loyalcoder_upgrade_notice' );
}
add_action( 'after_switch_theme', 'loyalcoder_switch_theme' );


function loyalcoder_upgrade_notice() {
    $message = sprintf( __( 'Loyalcoder requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'loyalcoder' ), $GLOBALS['wp_version'] );
    printf( '<div class="error"><p>%s</p></div>', $message );
}


function loyalcoder_customize() {
    wp_die(
        sprintf( __( 'Loyalcoder requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'loyalcoder' ), $GLOBALS['wp_version'] ),
        '',
        array(
            'back_link' => true,
        )
    );
}
add_action( 'load-customize.php', 'loyalcoder_customize' );


function loyalcoder_preview() {
    if ( isset( $_GET['preview'] ) ) {
        wp_die( sprintf( __( 'loyalcoder requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'loyalcoder' ), $GLOBALS['wp_version'] ) );
    }
}
add_action( 'template_redirect', 'loyalcoder_preview' );
