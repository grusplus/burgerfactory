<?php
/**
 * Template Name: Small Coloured Title
 *
 * @package WordPress
 * @subpackage Burger_Factory
 * @since Burger Factory 0.1
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">

		<div class="col-3 sidebar">
			<?php get_sidebar(); ?>
		</div>

		<div class="col-9">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-list' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
