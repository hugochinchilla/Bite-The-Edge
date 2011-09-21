<?php
/**
 * Toolbox functions and definitions
 */


function toolbox_posted_on() {
	printf( __( 'Posted on %s, ', 'bte' ), esc_html( get_the_date() ));
}


function toolbox_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em><?php _e( 'Your comment is awaiting moderation.', 'toolbox' ); ?></em>
				<br />
			<?php endif; ?>
			
			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
			
			<footer>
				<div class="comment-author vcard">
					<?php printf( __('Comment by %1$s %2$s - <time pubdate datetime="%3$s">%4$s @ %5$s</time>', 'bte'),
							get_avatar( $comment, 16 ),
							sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ),
							get_comment_time( 'c' ),
							get_comment_date(),
							get_comment_time()
					); ?>
				</div><!-- .comment-author .vcard -->
				

				<?php edit_comment_link( __( '(Edit)', 'toolbox' ), ' ' ); ?>

			</footer>			
		</article><!-- #comment-## -->

	<?php
			break;
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'toolbox' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'toolbox' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}

/**
 * This theme was built with PHP, Semantic HTML, CSS, love, and a Toolbox.
 */