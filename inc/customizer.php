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

	$wp_customize->add_setting( 'accent_color_1', array(
		'default'   => '#952637',
		'transport' => 'postMessage'
	));

	$wp_customize->add_setting( 'accent_color_2', array(
		'default'    => '#BB7243',
		'transport'  => 'postMessage'
	));

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'accent_color_1',
			array(
				'label'      => __( 'First Accent Color (Tagline, Excerpt)', 'burger-factory' ),
				'section'    => 'colors',
				'settings'   => 'accent_color_1'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'accent_color_2',
			array(
				'label'      => __( 'Second Accent Color (Meta)', 'burger-factory' ),
				'section'    => 'colors',
				'settings'   => 'accent_color_2'
			)
		)
	);

	$wp_customize->add_section( 'burger_factory_copy' , array(
		'title'      => __( 'Copy', 'burger-theme' ),
		'priority'   => 30,
	) );

	$wp_customize->add_setting( 'footer_copy', array(
		'default'     => __( 'Theme by <a href="https://anguswoodman.com/" rel="designer">Angus Woodman</a>' , 'burger-factory'),
		'transport'   => 'postMessage'
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer_copy',
			array(
				'label'       => __( "Footer Copy", 'burger-factory' ),
				'description' => __( "If you replace the link to the author's website, another link somewhere else on your site would be appreciated :)", 'burger-factory' ),
				'section'     => 'burger_factory_copy',
				'settings'    => 'footer_copy'
			)
		)
	);
}
add_action( 'customize_register', 'burger_factory_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function burger_factory_customize_preview_js() {
	wp_enqueue_script( 'burger_factory_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20170220', true );
}
add_action( 'customize_preview_init', 'burger_factory_customize_preview_js' );