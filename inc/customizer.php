<?php
/**
 * Burger Factory Theme Customizer.
 *
 * @package Burger_Factory
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function burger_factory_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'front_page', array(
		'title' => __( 'Front Page Index' ),
		'description' => __( 'Configure the front page post index.' ),
	) );

	$tag_choices = get_tag_choices();
	$tag_names = array_keys($tag_choices);

	// No categories for some reason? Get outta here.
	if (empty($tag_choices)) {
		return;
	}

	$wp_customize->add_setting( 'front_page_tag_slug_1', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => $tag_names[0],
	) );

	// No categories for some reason? Get outta here.

	$wp_customize->add_setting( 'front_page_tag_slug_2', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => !empty($tag_names[1]) ? $tag_names[1] : $tag_names[0],
	) );
	$wp_customize->add_setting( 'front_page_tag_slug_3', array(
		'type' => 'theme_mod', // or 'option'
		'capability' => 'edit_theme_options',
		'default' => !empty($tag_names[2]) ? $tag_names[2] : $tag_names[0],
	) );

	$wp_customize->add_control( 'front_page_tag_slug_1', array(
		'type' => 'select',
		'choices' => $tag_choices,
		'priority' => 10, // Within the section.
		'section' => 'front_page', // Required, core or custom.
		'label' => __( 'First List Tag' ),
		'description' => __( 'On the front page, links to the most recent posts from this tag will be shown as a list underneath the new section.' ),
		'active_callback' => 'is_front_page',
	) );

	$wp_customize->add_control( 'front_page_tag_slug_2', array(
		'type' => 'select',
		'choices' => $tag_choices,
		'priority' => 11, // Within the section.
		'section' => 'front_page', // Required, core or custom.
		'label' => __( 'Second List Tag' ),
		'description' => __( 'Then these will be shown.' ),
		'active_callback' => 'is_front_page',
	) );

	$wp_customize->add_control( 'front_page_tag_slug_3', array(
		'type' => 'select',
		'choices' => $tag_choices,
		'priority' => 12, // Within the section.
		'section' => 'front_page', // Required, core or custom.
		'label' => __( 'Third List Tag' ),
		'description' => __( 'Then these.' ),
		'active_callback' => 'is_front_page',
	) );

}
add_action( 'customize_register', 'burger_factory_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function burger_factory_customize_preview_js() {
	wp_enqueue_script( 'burger_factory_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'burger_factory_customize_preview_js' );

/**
 * Get the categories as an associative array (slug => name)
 *
 * @return array
 */
function get_tag_choices() {
	$tags = get_tags();
	$results = array();

	$count = count($tags);
	for ($i=0; $i < $count; $i++) {
		if (isset($tags[$i]))
			$results[$tags[$i]->slug] = $tags[$i]->name;
		else {
			$count++;
		}
	}

	return $results;
}