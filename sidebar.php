<?php
/**
 * The sidebar containing the main widget area
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area col-sm-3 mt-5" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'loyalcoder' ); ?>">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
