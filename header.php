<?php
/**
 * The header.
 *
 * @package Burger_Factory
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i" rel="stylesheet">
<?php wp_head(); ?>

<?php //Moved out from style.css so they can be translated ?>
<style type="text/css">
.post-navigation .nav-previous::after
{
	content: "<?php echo __('Previous', 'burger-factory'); ?>";
}
.post-navigation .nav-next::after
{
	content: "<?php echo __('Next', 'burger-factory'); ?>";
}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'burger-factory' ); ?></a>

	<header id="masthead" class="row site-header" role="banner">
		<div class="col-12">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
