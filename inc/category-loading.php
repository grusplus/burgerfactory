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
function burger_factory_category_list($category_name) {
	$query = new WP_Query('category_name='.$category_name.'&posts_per_page=4');
	if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
		the_permalink(' ');
		the_title();
		the_excerpt(); // or the_content(); for full post content
	endwhile;endif;
}
