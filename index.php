<?php get_header(); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 mt-5">
                <div class="lc-blog-post lc-blog-post-styl-1">
                        <h1 class="min-page-title">Recent Post</h1>
                        <hr>
                        <?php

                          while(have_posts()) : the_post();
                              get_template_part( 'template-parts/posts/content' );
                          endwhile;
                          the_posts_pagination([
                                  'screen_reader_text' => '&nbsp;',
                                 'prev_text' => '<span aria-hidden="true">«</span>',
                                  'next_text' => '<span aria-hidden="true">»</span>',
                          ]);
                        ?>
            </div>
            </div>
            <?php get_sidebar(); ?>
            </div>
            </div>
            </div>
<?php  get_footer(); ?>


