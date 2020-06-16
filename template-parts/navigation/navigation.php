<?php

$image =  get_theme_mod( 'custom_logo' );
 ?>

<header id="lc-header" class="container-fuild p-0 lc-header">
    <div class="header-top">
        <div class="container">

        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-lc">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                <?php if($image == 0){
                    ?>
                    <span>Loyalcoder</span>
                <?php }else{
                    echo wp_get_attachment_image($image, [200, 250]);
                } ?>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#loyalcoder-menu" aria-controls="loyalcoder-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="loyalcoder-menu">
                <?php wp_nav_menu([
                    'theme_location' => 'top',
                    'container' => '',
                    'menu_class' => 'navbar-nav mr-auto',
                    'walker'     => new nav_walker_lc,
                ]); ?>
                <div class="search from ml-auto lc-menu-search" id="searchform">
                    <form action="<?php bloginfo('url'); ?>/" class="form-inline" method="get">
                        <input type="text" placeholder="Type to search ......." value="<?php the_search_query(); ?>" name="s" id="s" > <i class="icon-magnifier"></i></i>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
