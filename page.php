<?php get_header(); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="lc-page mt-4">

                        <?php
                        while(have_posts()) : the_post();
                            the_content();
                        endwhile;
                        ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php  get_footer(); ?>


