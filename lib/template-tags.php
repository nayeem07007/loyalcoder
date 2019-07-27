<?php
/**
 * Created by PhpStorm.
 * User: Md Nayeem
 * Date: 6/12/2019
 * Time: 12:41 AM
 */

//  Post meta


function lc_post_meta($id) {
     $cats = get_the_category();
     
    ?>
    <div class="lc-sidebar-post-meta">
        <span class="date icon-calendar-alt-stroke">
            <a href="<?php echo get_post_type_archive_link( 'post' ); ?>"><?php echo esc_html(get_the_date('F d, Y')); ?></a>
        </span>
        <?php foreach ($cats as $cat) : ?>
        <span class="date icon-tag1"><a href="<?php echo esc_url(get_category_link($cat->cat_ID)); ?>"><?php echo esc_html($cat->name); ?></a></span>
        <?php endforeach; ?>
        <span class="date icon-comment-fill"><a href="<?php comments_link(); ?>"><?php comments_number( 'no responses', 'one response', '% responses' ); ?>
            </a></span>
        <span>By : <a href="<?php echo get_author_posts_url( get_the_author_meta( $id ), get_the_author_meta( 'user_nicename' ) ); ?>"> <?php the_author(); ?></a></span>
    </div>
<?php

}