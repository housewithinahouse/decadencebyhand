<?php
/**
 * Single
 *
 * @package SimpleMarket
 * @subpackage Template
 * @since SimpleMarket 1.0
 */
?>
<?php get_header(); ?>
<section id="content" role="main">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
		get_template_part( 'content', 'single' );
		simplemarket_pagination(); 
		comments_template( '', true ); 
	endwhile; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer() ?>