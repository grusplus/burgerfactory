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
            Built with
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'burger-factory' ) ); ?>">WordPress</a>
            +
		  <?php printf( esc_html__( '%1$s', 'burger-factory' ), '<a href="https://anguswoodman.com/" rel="designer">Angus Woodman</a>\'s <em>Burger Factory</em> Theme', ''); ?>
          + Wonder
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
