<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JOTT_MEDIA
 */
?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer">
				<div class="container">
					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => 1 ) ); ?>
					</nav>
				</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>

  
