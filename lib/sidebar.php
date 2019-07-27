<?php
add_action( 'widgets_init', 'lc_sidebar_init' );
function lc_sidebar_init() {

    $args = array(
        'name'          => __( 'Main sidebar', 'theme_text_domain' ),
        'id'            => 'sidebar-1',    // ID should be LOWERCASE  ! ! !
        'description'   => '',
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>' );

    register_sidebar($args);
}
