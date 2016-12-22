<?php
/**
 * Template Name: All Posts Page
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

		<div class="col-9">
			<header class="page-header">
				<h1 class="front-page-category">Index</h1>
			</header><!-- .page-header -->

			<?php
			$args = array( 'numberposts' => -1, 'orderby' => 'post_date' );
			$postslist = get_posts( $args );

		?><ul class="entry-list-condensed">
			<?php foreach ($postslist as $post) :  setup_postdata($post); ?>
			<li>

			<a href="<?php the_permalink() ?>">
			<?php the_title(); ?>
			</a> <br>

			<?php
				$catgories = array();
				foreach( get_the_category() as $post_category ) {
					$catgories[] = $post_category->name;
				}
			?>
			<span class='entry-list-condensed-meta'><?= implode(", ", $catgories); ?></span>
			</li>

			<?php endforeach; ?>
		</ul>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
