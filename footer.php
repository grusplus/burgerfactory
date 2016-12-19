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
		<div class="col-12 site-info">
            This site runs on
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'burger-factory' ) ); ?>">WordPress</a>
            and uses the theme
		<?php printf( esc_html__( '%1$s by %2$s.', 'burger-factory' ), '<em>Burger Factory</em>', '<a href="https://anguswoodman.com/" rel="designer">Angus Woodman</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
