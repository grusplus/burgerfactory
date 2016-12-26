<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Burger_Factory
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">

		<div class="col-3 sidebar">
			<?php get_sidebar(); ?>
		</div>

		<div class="col-9 archive-entry-list">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php if ( is_search() ) : ?>
					<h1 class="front-page-category">
						<?php printf( esc_html__( 'Search Results for: %s', 'burger-factory' ), '<span>' . get_search_query() . '</span>' ); ?>
					</h1>
				<?php else:
					the_archive_title( '<h1 class="front-page-category">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
				<?php endif; ?>
			</header><!-- .page-header -->

			<ul class="entry-list-condensed">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				the_title( sprintf( '<li><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></li>' );

			endwhile;
			?>
			</ul><!-- .entry-header -->
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
