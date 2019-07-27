<?php

//  Google font url

function lc_google_font_url($lc_font) {

   // https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i


    $font_families = [];

    $font_families[] = $lc_font;

    $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),
    );

    $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );


   return esc_url_raw($fonts_url);

}


function lc_remove_sticky_post_from_default_loop( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post__not_in', get_option("sticky_posts") );
    }
}

function lc_excerpt_more($more) {
    global $post;
    return ' <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
}
add_filter('excerpt_more', 'lc_excerpt_more');
