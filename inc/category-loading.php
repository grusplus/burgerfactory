<?php
/**
 * Loading the category lists for the homepage
 *
 * @package Burger_Factory
 */

/**
 *
 * @return bool
 */
function burger_factory_category_list( $slug ) {
	$query = new WP_Query('category_name=' . $slug . '&posts_per_page=4');
	$category = get_category_by_slug( $slug );
	echo "<h6 class='front-page-category'>" . $category->name . "</h6>";

	echo "<ul class='entry-list-condensed'>";
	if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
		echo "<li><a href='" . the_permalink(' ') . "'>";
		the_title();
		echo "</a> <br>";
		echo "<span class='entry-list-condensed-meta'>";
		$catgories = array();

		foreach( get_the_category() as $post_category ) {
			if( $post_category->slug != $category->slug ) {
				$catgories[] = $post_category->name;
			}
		}

		echo implode(", ", $catgories);
		echo "</span>";
		"</li>";
	endwhile;endif;
	echo "</ul>";
}
