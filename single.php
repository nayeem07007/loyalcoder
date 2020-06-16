<?php get_header(); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mt-5">
                <div class="lc-blog-post lc-blog-post-styl-1">
                    <?php

                    while(have_posts()) : the_post();
                        get_template_part( 'template-parts/posts/content', 'single' );
                        // If comments are open or we have at least one comment, load up the comment template.
                       ?>
                        <div class="lc-comments">
                    <?php
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                        ?></div>
                            <?php
                    endwhile;
                    ?>
                </div>
            </div>

                <?php get_sidebar(); ?>

        </div>
    </div>
</div>
<?php  get_footer(); ?>


