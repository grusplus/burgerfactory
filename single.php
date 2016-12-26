<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Burger_Factory
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

				get_template_part( 'template-parts/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation();

			endwhile; // End of the loop.
			?>
		</div>
		</main><!-- #main -->

	</div><!-- #primary -->

<?php
get_footer();
