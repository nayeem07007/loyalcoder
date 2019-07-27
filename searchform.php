<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = uniqid(); ?>
<div class="search from lc-menu-search" id="searchform">
<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" id="<?php echo $unique_id; ?>" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'loyalcoder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="btn btn-primary search-submit">Search</button>
</form>
</div>
