<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage ManjaroGreen
 * @since ManjaroGreen 1.0
 */

if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					echo get_the_title();
				} else {
					echo number_format_i18n( $comments_number ).'thought on &ldquo;'.get_the_title()
.'&rdquo;';
				}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ul',
					'short_ping'  => true,
					'avatar_size' => 50,
				) );
			?>
		</ul><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; ?>

	<?php
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>

	<?php endif; ?>

	<?php
		comment_form( array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
			'fields' => array(

            	'author' => '<p class="comment-form-author">'.'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" placeholder="*your name" /></p>',
            	'email'  => '<p class="comment-form-email">'.'<input id="email" name="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" placeholder="*your email" /></p>',


	            'url'    => '',
	            ),
            )
		);
	?>
</div><!-- .comments-area -->