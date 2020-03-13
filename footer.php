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
		<div class="site-info">
            <div class='col-6'>
				<?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&copy; <?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&copy; <?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
            </div>
            <div class='col-6' style="text-align:right">
                <p class="tertiary-text">"What is over leaves its best bits with you, but what never begins leaves its worst."</p>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
