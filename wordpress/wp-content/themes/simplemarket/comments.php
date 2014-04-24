<?php
/**
 * Comments
 *
 * @package SimpleMarket
 * @subpackage Template
 * @since SimpleMarket 1.0
 */
?>
<div id="comments">
<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', TEMPLATE_DOMAIN); ?></p>
	</div>
<?php
return;
endif;
?>
<?php if ( have_comments() ) : ?>
	<h3 id="comment-title"><?php
	printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), TEMPLATE_DOMAIN),
	number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
	?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<div class="comment-navigation">
		<div class="comment-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', TEMPLATE_DOMAIN) ); ?></div>
		<div class="comment-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', TEMPLATE_DOMAIN) ); ?></div>
	</div> 
<?php endif; ?>
	<ol class="commentlist">
		<?php
			wp_list_comments( array( 'callback' => 'simplemarket_comment' ) );
		?>
	</ol>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
	<div class="comment-navigation">
		<div class="comment-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', TEMPLATE_DOMAIN) ); ?></div>
		<div class="comment-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', TEMPLATE_DOMAIN) ); ?></div>
	</div>
<?php endif;  ?>

<?php else : 

if ( ! comments_open() ) :
?>
<p class="nocomments"><?php _e( 'Comments are closed.', TEMPLATE_DOMAIN); ?></p>
<?php endif;  ?>

<?php endif;  ?>
<?php comment_form(); ?>
</div>