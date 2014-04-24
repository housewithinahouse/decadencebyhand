<?php
/**
 * Sidebar
 *
 * @package SimpleMarket
 * @subpackage Template
 * @since SimpleMarket 1.0
 */
?>	
<section id="sidebar" role="main">	
	<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
		<?php dynamic_sidebar( 'sidebar' ); ?>
	<?php }else{ ?>
		<aside class="widget">
			<h3 class="widgettitle"><?php _e('Meta', TEMPLATE_DOMAIN); ?></h3>
			<ul>
				<?php wp_register(); ?>
				<?php wp_loginout(); ?>
				<?php wp_meta(); ?>
			</ul>
		</aside>
	<?php } ?>
</section>