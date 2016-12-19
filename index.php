<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Burger_Factory
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">

		<div class="col-8">
		<?php
		if ( have_posts() ) :
			?><div class="entry-list"><?php
			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			elseif(is_front_page()):
				$page = get_query_var( 'paged', 1 );
				if ( $page == 0 ) :
					?><h6 class="front-page-category">New</h6><?php
				elseif ( $page < 5 ) :
					?>
						<h6 class="front-page-category">Not So New</h6>
					<?php
				elseif ( $page < 10 ) :
					?>
						<h6 class="front-page-category">Old</h6>
					<?php
				elseif ( $page >= 10 ) :
					?>
						<h6 class="front-page-category">Way Way Back</h6>
					<?php
				endif;
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Using the simplified search listing on the index page.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			?><a href="/article_index">More</a>
			</div>

			<div class="front-page-category-lists"><?php
				burger_factory_category_list(get_theme_mod('front_page_category_slug_1'));
				burger_factory_category_list(get_theme_mod('front_page_category_slug_2'));
				burger_factory_category_list(get_theme_mod('front_page_category_slug_3'));
			?>
			</div>
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div>
		<div class="col-4 sidebar">
		<? get_sidebar(); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
