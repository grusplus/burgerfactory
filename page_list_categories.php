<?php
/**
 * Template Name: Category List Page
 *
 * A page with all of your posts in a list. You may want this. You may not.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">

			<div class="col-3 sidebar">
				<? get_sidebar(); ?>
			</div>

			<section class="col-9 archive-entry-list">
				<header class="page-header">
					<h1 class="front-page-category"><?php esc_html_e( "Categories", 'burger-factory' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<ul class="entry-list-condensed">
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 999,
						) );
					?>
					</ul>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
