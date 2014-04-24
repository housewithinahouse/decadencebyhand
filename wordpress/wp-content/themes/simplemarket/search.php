<?php
/**
 * Search page
 *
 * @package SimpleMarket
 * @subpackage Template
 * @since SimpleMarket 1.0
 */
?>
<?php get_header(); ?>
<section id="content" role="main">
	<?php if ( have_posts() ) : ?>
	<header class="post-header">
		<h1 class="post-title"><?php printf( __( 'Search Results for: %s', TEMPLATE_DOMAIN), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header>
	<?php while ( have_posts() ) : the_post(); 
			get_template_part( 'content', get_post_format() );
		endwhile;
			simplemarket_pagination();
		else : ?>
	<article id="post-0" class="post no-results not-found">
		<header class="post-header">
			<h2 class="post-title"><?php _e( 'Nothing Found', TEMPLATE_DOMAIN); ?></h2>
		</header>
		<div class="post-body">
			<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', TEMPLATE_DOMAIN); ?></p>
			<?php get_search_form(); ?>
		</div>
	</article>
	<?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer() ?>
