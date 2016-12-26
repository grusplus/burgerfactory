<?php
/**
 * Burger Factory functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Burger_Factory
 */

if ( ! function_exists( 'burger_factory_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function burger_factory_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Burger Factory, use a find and replace
	 * to change 'burger-factory' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'burger-factory', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'burger-factory' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'burger_factory_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'burger_factory_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function burger_factory_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'burger_factory_content_width', 640 );
}
add_action( 'after_setup_theme', 'burger_factory_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function burger_factory_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'burger-factory' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'burger-factory' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'burger_factory_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function burger_factory_scripts() {
	wp_enqueue_style( 'burger-factory-style', get_stylesheet_uri() );

	wp_enqueue_script( 'burger-factory-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'burger-factory-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'burger_factory_scripts' );

/**
 * Loading the category lists for the homepage
 *
 * @return void
 */
function burger_factory_tag_list( $slug ) {
	$query = new WP_Query( array('tag' => $slug, 'posts_per_page' => 4) );
	$tag = get_term_by( 'slug', $slug, 'post_tag' );

	// If no such tags, get outta here.
	if( !$tag ){
		return;
	}

	echo "<h6 class='front-page-category'>" . $tag->name . "</h6>";

	echo "<ul class='entry-list-condensed'>";
	if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
		echo '<li><a href="';
		the_permalink();
		echo '">';
		the_title();
		echo "</a> <br>";
		echo "<span class='entry-list-condensed-meta'>";
		$catgories = array();

		// Just in case the tag is the same as the category name, let's not show both
		foreach( get_the_category() as $post_category ) {
			if( $post_category->name != $tag->name ) {
				$catgories[] = $post_category->name;
			}
		}

		echo implode(", ", $catgories);
		echo "</span>";
		"</li>";
	endwhile;endif;
	echo "</ul>";
}

function burger_factory_full_post_list() {
	$postslist = get_posts( array( 'numberposts' => -1, 'orderby' => 'post_date' ) );
	$code = '<ul class="entry-list-condensed">';

	foreach ($postslist as $post) :  setup_postdata($post);
		$code .= '<li>';
		$code .= '<a href="' . get_the_permalink($post) . '">';
		$code .= get_the_title($post);
		$code .= '</a> <br>';

		$catgories = array();
		foreach( get_the_category() as $post_category ) {
			$catgories[] = $post_category->name;
		}

		$code .= '<span class="entry-list-condensed-meta">' . implode(", ", $catgories) . '</span>';
		$code .= '</li>';

	endforeach;

	$code .= '</ul>';

	return $code;
}

add_shortcode('full_post_list', 'burger_factory_full_post_list');


function burger_factory_full_category_list() {

	echo '<ul class="entry-list-condensed">';
	wp_list_categories( array(
		'orderby'    => 'count',
		'order'      => 'DESC',
		'show_count' => 1,
		'title_li'   => '',
		'number'     => 999,
	) );
	echo '</ul>';
}

add_shortcode('full_category_list', 'burger_factory_full_category_list');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
