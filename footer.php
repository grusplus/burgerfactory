<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Burger_Factory
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="col-3">
		</div>
		<div class="col-9 site-info">
			<?php echo sprintf(
				__('Made with %1$s + %2$s + %3$s', 'burger-factory'),
				__( '<a href="https://wordpress.org/">WordPress</a>', 'burger-factory' ),
				__( '<a href="https://anguswoodman.com/" rel="designer">Angus Woodman</a>\'s Burger Factory Theme', 'burger-factory' ),
				!empty( get_theme_mod( 'detail_footer_copy' ) ) ? get_theme_mod( 'detail_footer_copy' ) : "Care"
			); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
