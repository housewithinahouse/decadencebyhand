<?php
/**
 * Header
 *
 * @package SimpleMarket
 * @subpackage Template
 * @since SimpleMarket 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]>	<html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>		<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>		<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>		<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php  global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', TEMPLATE_DOMAIN), max( $paged, $page ) );
		?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url') ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
	<div id="site-wrapper">
		<div id="site-outer">
			<nav id="top-nav" role="navigation">
				<div id="nav-inner">		
							<?php wp_nav_menu( array(
								'theme_location' => 'top_menu', 
								'menu_class' => 'topmenu', 
								'container' => '', 
								'fallback_cb' => 'simplemarket_fallback_menu'
							)); ?>
					<div class="clear"></div>
				</div>
			</nav>
			<div id="site-inner">
				<header id="branding" role="banner">
					<div id="branding-inner">
						<div id="site-logo">
							<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
						</div>
						<div id="site-actions">
							<div id="site-description"><?php bloginfo('description'); ?> </div>
							<div id="search-box">		<?php get_search_form(); ?></div>
						</div>
					</div>
					<?php
					$simpleheader = get_header_image();
					if ($simpleheader != ""){
					?>
						<div id="header-image">
							<img src="<?php echo $simpleheader; ?>" class="header-image" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
						</div>
					<?php } ?>
				</header>
				<div id="main">
				<div id="main-inner">