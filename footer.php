<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grapefruit_Stand
 */

?>

        <?php if ( is_active_sidebar( 'after-content' ) ) :
            ?><div class="after-content-widgets"><?php
            dynamic_sidebar( 'after-content' );
            ?></div><?php
        endif; ?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
				<?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>

		<div class="col-3">
		</div>
		<div class="col-9 site-info">
			<p><?php echo get_theme_mod( 'footer_copy' ); ?></p>
			<p class="theme-by really-small"><?php echo __( '<a href="https://anguswoodman.com/simple-wordpress-themes" rel="designer">Theme by Angus Woodman</a>', 'grapefruit-stand' ); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
