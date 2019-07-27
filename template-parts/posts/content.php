<article id="post-<?php echo get_the_ID(); ?>" <?php  post_class('lc-blog-post-group mb-4'); ?>>

    <?php

     $col = 'col-sm-7';

     if(!has_post_thumbnail()){
         $col = 'col-sm-12';
     }

    ?>

    <div class="row">
        <?php if(has_post_thumbnail()) : ?>
        <div class="col-sm-5">
            <a href="<?php echo esc_url(the_permalink()); ?>"><?php the_post_thumbnail('post_thum'); ?></a>
        </div>
        <?php endif; ?>
        <div class="<?php echo esc_attr($col); ?>">
            <?php
            if(is_single()) : the_title('<h1>', '</h1>');

            else:
            the_title('<h3 class="lc-recent-post-title"><a href="'.get_permalink().'">', '</a></h3>');
             endif;
            lc_post_meta(get_the_ID());
             the_excerpt(); ?>
        </div>
    </div>
</article>