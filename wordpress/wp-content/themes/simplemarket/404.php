<?php
/**
 * 404 page
 *
 * @package SimpleMarket
 * @subpackage Template
 * @since SimpleMarket 1.0
 */
?>
<?php get_header(); ?>
<section id="content" role="main">
	<article class="post error404 not-found">
			<header class="post-header">
		<h1 class="post-title"><?php _e( 'Not Found', TEMPLATE_DOMAIN); ?></h1>
		</header>
		<div class="post-body">
			<p><?php _e( 'Sorry we could not find that page.', TEMPLATE_DOMAIN); ?></p>
				<?php get_search_form(); ?>
		</div>
	</article>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>