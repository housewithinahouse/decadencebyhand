<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package decadence
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="grid-100 grid-parent" style="margin-left:0px">
			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="topBanner" src="http://housewithinahouse.com/wordpress/wp-content/themes/decadence/images/banner1.png">
			</a>
		</div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
