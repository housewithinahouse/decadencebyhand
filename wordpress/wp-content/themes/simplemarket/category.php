<?php
/**
 * Category page
 *
 * @package SimpleMarket
 * @subpackage Template
 * @since SimpleMarket 1.0
 */
?>
<?php get_header(); ?>
<section id="content" role="main">
	<header class="post-header">
		<h1 class="post-title">
	<?php printf( __( 'Category Archives: %s', TEMPLATE_DOMAIN), '<span>' . single_cat_title( '', false ) . '</span>' );
?></h1>
	</header>
	<?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' );
	while ( have_posts() ) : the_post(); 
		get_template_part( 'content', get_post_format() );
	endwhile;
		simplemarket_pagination(); ?>		
</section>
<?php get_sidebar(); ?>
<?php get_footer() ?>
