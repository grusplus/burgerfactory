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

		<div class="col-3 sidebar">
		<?php get_sidebar(); ?>
		</div>

		<div class="col-9">
		<?php
		if ( have_posts() ) :
			?><div class="entry-list"><?php
			if ( is_home() && !is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			endif;
			?>
			<?php
			/* Start the Loop */
			// We want the 'new' below the sticky posts, so we'll put it before the first post that
			// isn't
			$done_with_stickies = false;
			while ( have_posts() ) : the_post();

				if(!is_sticky() && $done_with_stickies == false):
					$current_page = get_query_var( 'paged', 1 );

					if ( $current_page == 0 ) :
						?><h6 class="front-page-category"><?php echo __( 'New', 'burger-factory'); ?></h6><?php
					elseif ( $current_page < 5 ) :
						?>
							<h6 class="front-page-category"><?php echo __( 'Not So New', 'burger-factory'); ?></h6>
						<?php
					elseif ( $current_page < 10 ) :
						?>
							<h6 class="front-page-category"><?php echo __( 'Old', 'burger-factory'); ?></h6>
						<?php
					elseif ( $current_page >= 10 ) :
						?>
							<h6 class="front-page-category"><?php echo __( 'Way Back', 'burger-factory'); ?></h6>
						<?php
					endif;
					$done_with_stickies = true;
				endif;

				get_template_part( 'template-parts/content', 'summary' );
			endwhile;

			// Replace the previous / next nav if
			$replace_navigation = get_theme_mod('front_page_replace_paging')
									&& !empty(get_theme_mod('front_page_replace_paging_page'));
			if( $replace_navigation ):
				$url = get_permalink(get_theme_mod('front_page_replace_paging_page'));
				?>
				<a href="<?php echo $url?>"><?php echo __( 'More', 'burger-factory'); ?></a>
				<?php
			else:
				the_posts_navigation( array('prev_text' => "More", 'next_text' => "Back") );
			endif;
			?>
			</div>

			<div class="front-page-category-lists"><?php
				burger_factory_tag_list(get_theme_mod('front_page_tag_slug_1'));
				burger_factory_tag_list(get_theme_mod('front_page_tag_slug_2'));
				burger_factory_tag_list(get_theme_mod('front_page_tag_slug_3'));
			?>
			</div>
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
