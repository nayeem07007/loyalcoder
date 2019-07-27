<?php get_header(); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="lc-blog-post lc-blog-post-styl-1">

                    <?php 
                     
                     $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'post__in' => get_option('sticky_posts'),
                        'order' => 'rand'
                       );
                     $sticky_post = new WP_Query($args);
                     ?>
                    <div class="lc-feature-post-wrapper lc-blog-post mt-3">
                        <?php while($sticky_post->have_posts()) : $sticky_post->the_post(); ?>

                        <article id="post-id" class="lc-featured-post">
                            <?php if(has_post_thumbnail()):?>
                            <div class="lc-post-image-wrapper mb-3">
                                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                            </div>
                          <?php endif; ?>
                            <?php the_title('<h1><a href="'.get_the_permalink().'">', '</a></h1>'); ?>
                            <div class="post-meta">
                                <?php  lc_post_meta(get_the_ID()); ?>
                            </div>
                            <?php the_excerpt(); ?>

                        </article>
                    <?php endwhile; ?>

                    </div>
                    <div class="lc-blog-post lc-blog-post-styl-1">
                        <h2 class="lc-section-title">Recent Post</h2>
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
            </div>
            <?php get_sidebar(); ?>
            </div>
            </div>
            </div>
<?php  get_footer(); ?>


