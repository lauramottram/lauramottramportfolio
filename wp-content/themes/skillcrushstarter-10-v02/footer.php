<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

<!-- #main -->

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		<div class="site-info">
			<div class="site-description">
				<p><?php bloginfo('description'); ?></p>
				<p>&copy; <?php bloginfo('title'); ?>, LLC
			</div>
			<div class="social-media-navigation">
				<nav role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
				</nav>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<!-- #page -->

	<?php wp_footer(); ?>
