<?php
/**
 * Author page
 *
 * @package SimpleMarket
 * @subpackage Template
 * @since SimpleMarket 1.0
 */
?>
<?php get_header(); ?>
<section id="content" role="main">
	<?php
	if ( have_posts() ) the_post();
	?>
	<header class="post-header">
		<h1 class="post-title author"><?php printf( __( 'Author Archives: %s', TEMPLATE_DOMAIN), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>
	</header>
	<?php rewind_posts();
	if ( get_the_author_meta( 'description' ) ) : ?>
		<div id="entry-author-content">
			<div id="author-image">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'market_author_bio_avatar_size', 60 ) ); ?>
			</div>
			<div id="author-details">
				<h2><?php printf( __( 'About %s', TEMPLATE_DOMAIN), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
			</div>
		</div>
	<?php endif; ?>
	<?php while ( have_posts() ) : the_post();
		get_template_part( 'content', get_post_format() );
	endwhile; 
		simplemarket_pagination();; ?>
</section>	
<?php get_sidebar(); ?>
<?php get_footer() ?>
