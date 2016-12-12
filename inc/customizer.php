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


	$category_choices = get_category_choices();

	$wp_customize->add_setting( 'front_page_category_slug_1', array(
	  'type' => 'theme_mod', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => array_keys($category_choices)[0],
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );

	$wp_customize->add_section( 'front_page', array(
	  'title' => __( 'Front Page Lists' ),
	  'description' => __( 'Decide what\'s shown on the lists on the front page.' ),
	) );

	// TODO add error handling

	$wp_customize->add_control( 'front_page_category_slug_1', array(
	  'type' => 'select',
	  'choices' => $category_choices,
	  'priority' => 10, // Within the section.
	  'section' => 'front_page', // Required, core or custom.
	  'label' => __( 'Cat1' ),
	  'description' => __( 'This is a date control with a red border.' ),
	  'input_attrs' => array(
		'class' => 'my-custom-class-for-js',
		'style' => 'border: 1px solid #900',
		'placeholder' => __( 'mm/dd/yyyy' ),
	  ),
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
function get_category_choices() {
	$categories = get_categories();
	$results = array();

	$count = count($categories);
	for ($i=0; $i < $count; $i++) {
		if (isset($categories[$i]))
			$results[$categories[$i]->slug] = $categories[$i]->name;
		else {
			$count++;
		}
	}

	return $results;
}