<?php
/**
 * Page default template
 *
 * @package SimpleMarket
 * @subpackage Template
 * @since SimpleMarket 1.0
 */
?>
<?php get_header(); ?>
<section id="content" role="main">
	<?php the_post(); ?>
	<?php get_template_part( 'content', 'page' );?>
	<?php comments_template( '', true ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
