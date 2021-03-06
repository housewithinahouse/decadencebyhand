<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package decadence
 */

get_header(); ?>
	<div class="grid-100">
		<div class="grid-15 fill">				
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<h1 class="menu-toggle"><?php _e( 'Menu', 'decadence' ); ?></h1>
					<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'decadence' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
		</div>
		<div class="grid-85">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post();  ?>
							
						
							<?php 
								
								/* Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );
							?>
						<?php endwhile; ?>
						<?php decadence_content_nav( 'nav-below' ); ?>
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>

<?php get_footer(); ?>
