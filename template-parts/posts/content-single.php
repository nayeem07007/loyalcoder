<article id="post-<?php echo get_the_ID(); ?>" <?php  post_class('lc-blog-post-group mb-4'); ?>>

        <?php if(has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
               <?php the_post_thumbnail('full'); ?>
            </div>
        <?php endif; ?>
        <div class="mt-2">
            <?php
                the_title('<h1>', '</h1>');
                lc_post_meta(get_the_ID());
                the_content();
            ?>
        </div>

</article>