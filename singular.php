<?php
/**
 * The template for displaying all posts
 *
 * This is the template that displays all posts by default.
 * Please note that this is the WordPress construct of posts
 * and that other 'posts' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JOTT_MEDIA
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
				if( have_rows('module') ):
					while ( have_rows('module') ) : the_row();
						get_template_part( 'template-parts/acf', get_row_layout() );
					endwhile;
				endif;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
