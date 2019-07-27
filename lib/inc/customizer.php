<?php

if ( !class_exists( 'Kirki' ) ) {
return;
}


Kirki::add_panel( 'lc_theme_option', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'loyalcoder' ),
    'description' => esc_html__( 'Theme option', 'loyalcoder' ),
) );

Kirki::add_section( 'lc_theme_options_logo', array(
    'title'          => esc_html__( 'Logo', 'loyalcoder' ),
    'panel'          => 'lc_theme_option',
    'priority'       => 160,
) );

Kirki::add_field( 'theme_config_id', [
    'type'        => 'image',
    'settings'    => 'image_setting_id',
    'section'     => 'lc_theme_options_logo',
    'default'     => '',
    'choices'     => [
        'save_as' => 'id',
    ],
] );

