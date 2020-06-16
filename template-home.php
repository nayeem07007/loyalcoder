<?php

/*
 * template name: home page
 */

get_header(); ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 mt-5">
                    <div class="lc-blog-post lc-blog-post-styl-1">
                        <h1 class="min-page-title">Recent Post</h1>
                        <hr>
                        <?php
                      $argc = [
                          'post_type' => 'post',
                          'post_per_pages' => 10,
                          'paged' => get_query_var('page') ? get_query_var('page') : 1

                      ];
                     
                      $loop =  new WP_Query($argc);
                        while($loop->have_posts()) : $loop->the_post();
                            get_template_part( 'template-parts/posts/content' );
                        endwhile;
                        $big = 999999999; // need an unlikely integer
                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('page') ),
                            'total' => $loop->max_num_pages
                        ) );

                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php  get_footer(); ?>