<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Burger_Factory
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">

			<div class="col-3 sidebar">
				<?php get_sidebar(); ?>
			</div>

			<section class="col-9 error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( "Crack?", 'burger-factory' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( "Either you're smoking it or you found one because there's no page at that location.", 'burger-factory' ); ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
