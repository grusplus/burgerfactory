<?php
/**
 * Custom template tags for this theme.
 *
 * @package Burger_Factory
 */

if ( ! function_exists( 'burger_factory_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function burger_factory_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'burger-factory' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $time_string . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'burger_factory_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function burger_factory_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'burger-factory' ) );
		if ( $tags_list ) {
			printf( '<span class="tag-links">' . esc_html__( 'Tags: %1$s', 'burger-factory' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'burger-factory' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'burger-factory' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

if ( ! function_exists( 'burger_factory_entry_category' ) ) :
/**
 * Prints HTML with meta information for the categories.
 */
function burger_factory_entry_category() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'burger-factory' ) );

		if ( $categories_list ) {
			printf( '<span class="cat-links">' . esc_html__( '%1$s', 'burger-factory' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}
	}
}
endif;