<?php
/**
 * The template for displaying the Homepage.
 *
 *
 * @package np
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'frontpage' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php //dynamic_sidebar( 'sidebar-1' ); ?>
<?php get_footer(); ?>
