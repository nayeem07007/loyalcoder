<?php get_header(); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="lc-blog-post lc-blog-post-styl-1">

                    <div class="lc-blog-post lc-blog-post-styl-1">
                        <?php if(have_posts()) : ?>
                        <header class="page-header mt-4">
                            <?php
                            the_archive_title( '<h1 class="lc-section-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
                        </header>
                            <hr><!-- .page-h
                        <h2 class="lc-section-title">Recent Post</h2>
                        <hr> -->
                        <?php

                        while(have_posts()) : the_post();
                            get_template_part( 'template-parts/posts/content' );
                        endwhile;
                        the_posts_pagination([
                            'screen_reader_text' => '&nbsp;',
                            'prev_text' => '<span aria-hidden="true">«</span>',
                            'next_text' => '<span aria-hidden="true">»</span>',
                        ]);
                        else: get_template_part( 'template-parts/posts/content', 'none' );
                        endif;
                        ?>
                    </div>
                </div>
            </div>

                <?php get_sidebar(); ?>

        </div>
    </div>
</div>
<?php  get_footer(); ?>


