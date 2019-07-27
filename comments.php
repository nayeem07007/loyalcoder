<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) :
        ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'loyalcoder' ), get_the_title() );
            } else {
                printf(
                /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s Reply to &ldquo;%2$s&rdquo;',
                        '%1$s Replies to &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'loyalcoder'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'avatar_size' => 100,
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'reply_text'  => '<i class="fas fa-reply"></i>',
                )
            );
            ?>
        </ol>

        <?php
        the_comments_pagination(
            array(
                'prev_text' => '<i class="fas fa-reply"></i>' . '<span class="screen-reader-text">' . __( 'Previous', 'loyalcoder' ) . '</span>',
                'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'loyalcoder' ) . '</span>' . 'dfasdf',
            )
        );

    endif; // Check for have_comments().

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>

        <p class="no-comments"><?php _e( 'Comments are closed.', 'loyalcoder' ); ?></p>
    <?php
    endif;
    $fields =  array(

        'author' =>
            '<div class="comment-form-author form-group mt-2">' .
            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
            '" size="30"' . $aria_req . ' class="form-control" placeholder="Full name *" /></div>',

        'email' =>
            '<div class="comment-form-email form-group">' .
            '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" size="30"' . $aria_req . ' class="form-control" placeholder="Email *"/></div>',

        'url' =>
            '<div class="comment-form-url">' .
            '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
            '" size="30" class="form-control" placeholder="You Website"/></div>',
    );


    $args = array(
        'class_form'      => 'comment_form',
        'class_submit'      => 'submit btn btn-primary',
        'title_reply'       => __( 'Leave a Reply' ),
        'title_reply_to'    => __( 'Leave a Reply to %s' ),
        'cancel_reply_link' => __( 'Cancel Reply' ),
        'label_submit'      => __( 'Post Comment' ),
        'format'            => 'xhtml',

        'comment_field' =>  '<div class="form-group">
           <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment">' .
            '</textarea></div>',

        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    );



    comment_form($args);
    ?>

</div><!-- #comments -->
